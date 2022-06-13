<?php

namespace App\Http\Controllers\Editor;

use App\Models\City;
use App\Models\Month;
use Illuminate\Http\Request;
use App\Models\SolarIrradiance;
use App\Http\Controllers\Controller;

class SolarIrradianceController extends Controller
{
    // List all solar irradiance data
    public function index()
    {
        return view('irradiance.index', 
        ['solarIrradiances' => SolarIrradiance::all()]
    );
    }

    // Show single solar irradiance
    public function show(SolarIrradiance $solarIrradiance)
    {
        return view('irradiance.show', ['solarIrradiance' => $solarIrradiance]);
    }

    // Show form to create new solar irradiance data
    public function create()
    {   
        return view('irradiance.create', [
            'months' => Month::all(),
            'cities' => City::all(), 
        ]);
    }

    // Store new solar irradiance data
    public function store(Request $request)
    {
        $solarIrradiance = new SolarIrradiance();
        if($solarIrradiance->setSolarIrradianceAttributes($request)){
            return redirect('/irradiance')->with('message', 'Solar Irradiance data has been added!');
        }
        return redirect('irradiance/create')->with('error', 'Error adding Solar Irradiance data!');
    }

    // Show form to edit solar irradiance data
    public function edit(SolarIrradiance $solarIrradiance)
    {
        return view('irradiance.edit', 
        [
        'solarIrradiance' => $solarIrradiance,
        'months' => Month::all(),
        'cities' => City::all(),
        ]);
    }

    // Update solar irradiance data
    public function update(Request $request, SolarIrradiance $solarIrradiance)
    {
        if($solarIrradiance->updateSolarIrradianceAttributes($request)){
            return redirect('/irradiance')->with('message', 'Solar Irradiance data has been updated!');
        }
        return redirect('/irradiance' . $solarIrradiance->id . '/edit')->with('error', 'Error updating Solar Irradiance data!');
    }

    // Delete solar irradiance data
    public function destroy(SolarIrradiance $solarIrradiance)
    {
        if($solarIrradiance->deleteSolarIrrradiance()){
            return redirect('/irradiance')->with('message', 'Solar Irradiance data has been deleted!');
        }
        return redirect('/irradiance' . $solarIrradiance->id)->with('error', 'Error deleting Solar Irradiance data!');
    }


}
