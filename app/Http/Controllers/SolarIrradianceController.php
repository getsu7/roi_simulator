<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Month;
use Illuminate\Http\Request;
use App\Models\SolarIrradiance;
use App\Http\Controllers\Controller;

class SolarIrradianceController extends Controller
{
    // List all solar irradiance data
    public function list()
    {
        return view('irradiance.index', 
        ['solarIrradiances' => SolarIrradiance::all()]
    );
    }

    // List Single solar irradiance data
    public function show(SolarIrradiance $solarIrradiance)
    {
        return view('irradiance.show', [
            'solarIrradiance' => $solarIrradiance
        ]);
    }

    // Show form to create new solar irradiance data
    public function create()
    {
        $months = Month::all();
        $cities = City::all();
        
        return view('irradiance.create', [
            'months' => $months,
            'cities' => $cities 
        ]);
    }

    // Store new solar irradiance data
    public function store(Request $request)
    {
        $solarIrradiance = new SolarIrradiance();
        if($solarIrradiance->setSolarIrradianceAttribute($request)){
            return redirect('/irradiance')->with('message', 'Solar Irradiance data has been added!');
        }
        return redirect('irradiance/create')->with('message', 'Error adding Solar Irradiance data!');
    }


}
