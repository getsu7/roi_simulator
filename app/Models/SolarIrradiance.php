<?php

namespace App\Models;

use App\Models\City;
use App\Models\User;
use App\Models\Month;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
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
        'month',
        'city',
        'user',
    ];

    public function month()
    {
        return $this->belongsTo(Month::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function setSolarIrradianceAttributes(Request $request)
    {
        $data = file_get_contents($request->json_file);
        $json = json_decode($data, true);

        for($i = 0; $i < count($json['outputs']['daily_profile']); $i++) {
            $this->{$i} = $json['outputs']['daily_profile'][$i]['G(n)'];
        }
        $this->month = $request->month;
        $this->city = $request->city;
        $this->user = $request->user;
        if($this->save()) {
            return true;
        } else {
            return false;
        }
    }
}
