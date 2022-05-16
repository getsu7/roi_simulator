<?php

namespace App\Models;

use App\Models\SolarIrradiance;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Month extends Model
{
    use HasFactory;

    protected $fillable = [
        'numeric_month',
        'month',
    ];

    public function solarIrradiance()
    {
        return $this->hasMany(SolarIrradiance::class);
    }
}
