<?php

namespace App\Http\Controllers;

use App\Models\SolarIrradiance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SolarIrradianceController extends Controller
{
    // List all solar irradiance data
    public function list()
    {
        return view('listings.index', 
        ['solarIrradiances' => SolarIrradiance::all()]
    );
    }

    // List Single solar irradiance data
    public function show(SolarIrradiance $solarIrradiance)
    {
        return view('listings.show', [
            'solarIrradiance' => $solarIrradiance
        ]);
    }

    // Show form to create new solar irradiance data
    public function create()
    {
        return view('listings.create');
    }

    // Store new solar irradiance data
    public function store(Request $request)
    {
        $data = new SolarIrradiance;

        $data->city_country = $request->city_country;

        $data->month = $request->month;

        $data->data = file_get_contents($request->data);

        $data->save();

        return redirect('/')->with('message', 'Solar Irradiance data has been added!');
    }


}
