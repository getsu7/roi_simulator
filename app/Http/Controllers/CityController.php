<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Month;
use Illuminate\Http\Request;
use App\Models\SolarIrradiance;

class CityController extends Controller
{
    // List all cities
    public function index()
    {
        $cities = City::all();
        return view('city.index', ['cities' => $cities]);
    }

    // Show single city
    public function show(City $city)
    {
        return view('city.show', ['city' => $city]);
    }

    // Show form to create new city
    public function create()
    {
        $city = new City();
        return view('city.create', ['city' => $city]);
    }

    // Store new city
    public function store(Request $request)
    {
        $city = new City;
        $city->city = $request->city;
        $city->country = $request->country;       
        $city->save();

        return redirect('/city')->with('message', 'City has been added!');
    }

    // Show form to edit city
    public function edit(City $city)
    {
        return view('city.edit', ['city' => $city]);
    }

    // Update city
    public function update(Request $request, City $city)
    {
        $city->city = $request->city;
        $city->country = $request->country;
        $city->save();
    }

    // Delete city
    public function destroy(City $city)
    {
        $city->delete();
        return redirect('/city')->with('message', 'City has been deleted!');
    }

}
