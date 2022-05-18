<?php

namespace App\Models;

use App\Models\User;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\SolarIrradiance;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'country_id',
    ];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function solarIrradiance(): HasMany
    {
        return $this->hasMany(SolarIrradiance::class);
    }

    public function setCityAttributes(Request $request)
    {
        $this->name = $request->city;
        $this->country_id = $request->country_id;
        $this->user_id = Auth::id();
        if($this->save()){
            return true;
        }else{
            return false;
        }
    }

    public function updateCityAttributes(Request $request)
    {
        $this->name = $request->city;
        $this->country_id = $request->country_id;
        $this->user_id = Auth::id();
        if($this->update()){
            return true;
        }else{
            return false;
        }
    }

    public function deleteCity()
    {
        if($this->delete()){
            return true;
        }else{
            return false;
        }
    }
}
