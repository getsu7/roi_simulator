<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolarIrradiance extends Model
{
    use HasFactory;

    protected $fillable = [
        'city_country',
        'month',
        'data',
    ];
    
    protected $casts = [
        'data' => 'array',
    ];
}
