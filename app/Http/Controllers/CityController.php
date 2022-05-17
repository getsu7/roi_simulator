<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;


class CityController extends Controller
{
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
        return view('city.create', ['countries' => Country::all()]);
    }

    // Store new city
    public function store(Request $request)
    {
        $city = new City();

        if($city->setCityAttributes($request)){
            return redirect('/city')->with('message', 'City has been added!');
        }
        return redirect('/city')->with('error', 'Error adding City!');
    }

    // Show form to edit city
    public function edit(City $city)
    {

        return view('city.edit', 
        ['city' => $city,
        'countries' => Country::all()
        ]);
    }

    // Update city
    public function update(Request $request, City $city)
    {
        if($city->updateCityAttributes($request)){
            return redirect('/city')->with('message', 'City has been updated!');
        }
        return redirect('/city')->with('error', 'Error updating City!');
    }

    // Delete city
    public function destroy(City $city)
    {
        if($city->deleteCity()){
            return redirect('/city')->with('message', 'City has been deleted!');
        }
        return redirect('/city')->with('error', 'Error deleting city!');
    }

}
