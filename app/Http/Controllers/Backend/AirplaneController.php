<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Airplane;
use Illuminate\Http\Request;

class AirplaneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $airplanes = Airplane::latest()->paginate(5);
        return view('backend.airplanes.index', ['airplanes' => $airplanes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.airplanes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $airplanesInstance = new Airplane;
        $airplanesInstance->name=$request->name;
        $airplanesInstance->description=$request->description;
        $airplanesInstance->save();
        return redirect('airplanes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Airplane $airplane)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
          $airplanes = Airplane::find($id);
         return view('backend.airplanes.edit', compact('airplanes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Airplane $airplane)
    {
        $airplane->name=$request->name;
        $airplane->description=$request->description;
        $airplane->save();
        return redirect('airplanes');

    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Airplane $airplane)
    {
        $airplane->delete();
        return redirect('airplanes')->with('message','Data deleted successfully');
    }
}
