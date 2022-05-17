<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{

    public function index()
    {
        return view('country.index', ['countries' => Country::all()]);
    }

    public function show(Country $country)
    {
        return view('country.show', ['country' => $country]);
    }
    
    public function create()
    {
        return view('country.create', ['country' => new Country()]);
    }

    public function store(Request $request)
    {
        $country = new Country();

        if($country->addCountry($request)) {
            return redirect('/country')->with('message', 'Country has been added!');
        }
        return redirect('/country')->with('message', 'Error adding Country!'); 
    }

    public function edit(Country $country)
    {
        return view('country.create', ['country' => $country]);
    }

    public function update(Request $request, Country $country)
    {

        if($country->updateCountry($request)){
            return redirect('/country')->with('message', 'Country has been updated!');
        }
        return redirect('/country')->with('Error', 'Error updating Country!');
    }

    public function destroy(Country $country)
    {
        $country->delete();
        return redirect('/country')->with('message', 'Country has been deleted!');
    }


}
