<?php

namespace App\Models;

use App\Models\City;
use App\Models\User;
use App\Models\Month;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SolarIrradiance extends Model
{
    use HasFactory;

    protected $fillable = [
        '0',
        '1',
        '2',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9',
        '10',
        '11',
        '12',
        '13',
        '14',
        '15',
        '16',
        '17',
        '18',
        '19',
        '20',
        '21',
        '22',
        '23',
        'month_id',
        'city_id',
    ];

    public function month(): BelongsTo
    {
        return $this->belongsTo(Month::class);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    public function setSolarIrradianceAttributes(Request $request)
    {
        $this->month_id = $request->month;
        $this->city_id = $request->city;
        $this->user_id = Auth::id();
        if(!empty($request->json_file)){
            $data = file_get_contents($request->json_file);
            $json = json_decode($data, true);
            for($i = 0; $i < count($json['outputs']['daily_profile']); $i++) {
                $this->{$i} = $json['outputs']['daily_profile'][$i]['G(n)'];
            }
        } else {
            return false;

        } try {
            $this->save();
            return true;

        } catch (\Exception $e) {
            report($e);
            return false;

        }
    }

    public function updateSolarIrradianceAttributes(Request $request)
    {
        if(!empty($request->json_file)){
            $data = file_get_contents($request->json_file);
            $json = json_decode($data, true);

            for($i = 0; $i < count($json['outputs']['daily_profile']); $i++) {
                $this->{$i} = $json['outputs']['daily_profile'][$i]['G(n)'];
            }
        }
        $this->month_id = $request->month;
        $this->city_id = $request->city;
        $this->user_id = Auth::id();
        try {
            $this->update();
            return true;

        } catch (\Exception $e) {
            report($e);
            return false;

        }
    }

    public function deleteSolarIrradiance()
    {
        try {
            $this->delete();
            return true;

        } catch (\Exception $e) {
            report($e);
            return false;
            
        }
    }
}
