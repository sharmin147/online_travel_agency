<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Ariport;
use Illuminate\Http\Request;

class AriportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ariport = Ariport::latest()->paginate(5);

        return view('backend.ariports.index', ['ariports' => $ariport]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.ariports.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ariport = new Ariport;
        $ariport->city_id=$request->city_id;
        $ariport->name=$request->name;
        $ariport->save();
        return redirect('ariports');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ariport $ariport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ariport $ariport)
    {
        return view('backend.ariports.edit', compact('ariport'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ariport $ariport)
    {
        $ariport->city_id=$request->city_id;
        $ariport->name=$request->name;
        $ariport->save();
        return redirect('ariports');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ariport $ariport)
    {
        $ariport->delete();
        return redirect('ariports')->with('message','Data deleted successfully');
    }
}
