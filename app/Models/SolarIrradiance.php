<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    ];

    // public function month()
    // {
    //     return $this->belongsToMany(Month::class, 'solar_irradiance');
    // }
    
}
