<?php

namespace App\Http\Controllers;
use App\Models\SolarIrradiance;
use Illuminate\Http\Request;

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
        $request->data = file_get_contents($request->data);

        //dd($request->all());

        $request->validate([
            'city_country' => 'required',
            'month' => 'required',
            'data' => 'required',
        ]);

        SolarIrradiance::create($request->all());

        return redirect('/')->with('message', 'Solar Irradiance data has been added!');

    }


}
