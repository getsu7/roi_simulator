<?php

namespace App\Http\Controllers\Editor;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CountryController extends Controller
{

    public function index()
    {
        return view('country.index', ['countries' => Country::all()]);
    }

    public function show(Country $country)
    {
        
        return view('country.show', ['country' => $country, 'cities' => Country::find($country->id)->city]);
    }
    
    public function create()
    {
        return view('country.create');
    }

    public function store(Request $request)
    {
        $country = new Country();

        if($country->setCountryAttributes($request)) {
            return redirect('/country')->with('message', 'Country has been added!');
        }
        return redirect('/country')->with('error', 'Error adding Country!'); 
    }

    public function edit(Country $country)
    {
        return view('country.edit', ['country' => $country]);
    }

    public function update(Request $request, Country $country)
    {

        if($country->updateCountry($request)){
            return redirect('/country')->with('message', 'Country has been updated!');
        }
        return redirect('/country')->with('error', 'Error updating Country!');
    }

    public function destroy(Country $country)
    {
        if($country->deleteCountry()){
            return redirect('/country')->with('message', 'Country has been deleted!');
        }
        return redirect('/country')->with('error', 'Error deleting country!');
    }


}
