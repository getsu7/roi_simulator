<?php

namespace App\Http\Controllers\Editor;

use App\Models\City;
use App\Models\Month;
use Illuminate\Http\Request;
use App\Models\SolarIrradiance;
use App\Http\Controllers\Controller;

class SolarIrradianceController extends Controller
{
    // Store new solar irradiance data
    public function store(Request $request)
    {
        $solarIrradiance = new SolarIrradiance();
        if($solarIrradiance->setSolarIrradianceAttributes($request)){
            return redirect()->action([CityController::class, 'show'], [$solarIrradiance->city])->with('success', 'Solar Irradiance data has been added!');
        }
        return redirect()->action([CityController::class, 'show'], ['city' => $request->city])->with('error', 'Error adding Solar Irradiance data!');
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
            return redirect()->action([CityController::class, 'show'], [$solarIrradiance->city])
            ->with('success', 'Solar Irradiance data has been updated!');
        }
        return redirect()->action([CityController::class, 'show'], [$solarIrradiance->city])
        ->with('error', 'Error updating Solar Irradiance data!');
    }

    // Delete solar irradiance data
    public function destroy(SolarIrradiance $solarIrradiance)
    {
        if($solarIrradiance->deleteSolarIrradiance()){

            return redirect()->action([CityController::class, 'show'], [$solarIrradiance->city])
            ->with('success', 'Solar Irradiance data has been deleted!');
        }
        return redirect()->action([CityController::class, 'show'], [$solarIrradiance->city])
        ->with('error', 'Error deleting Solar Irradiance data!');
    }


}
