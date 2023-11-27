<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $city = City::latest()->paginate(5);
        return view('backend.city.index', ['city' => $city]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.city.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cityInstance = new City;
        $cityInstance->name=$request->name;
        $cityInstance->save();
       return redirect('city');
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
          $city = City::find($id);
         return view('backend.city.edit', compact('city'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, City $city)
    {
        $city->name=$request->name;
        $city->save();
       return redirect('city');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        $city->delete();
        return redirect('city')->with('message','Data deleted successfully');
    }
}
