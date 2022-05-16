<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Month;
use Illuminate\Http\Request;
use App\Models\SolarIrradiance;
use Illuminate\Support\Facades\Auth;

class CityController extends Controller
{

    private City $city;

    // List all cities
    public function index()
    {
        return view('city.index', ['cities' => City::all()]);
    }

    // Show single city
    public function show(City $city)
    {
        return view('city.show', ['city' => $city]);
    }

    // Show form to create new city
    public function create()
    {
        return view('city.create', ['city' => new City()]);
    }

    // Store new city
    public function store(Request $request)
    {
        if($this->setCityAttributes($request)){
            return redirect('/city')->with('message', 'City has been added!');
        }
        return redirect('/city')->with('message', 'Error adding City!');
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
