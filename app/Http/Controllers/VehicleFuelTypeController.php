<?php

namespace App\Http\Controllers;

use App\Models\VehicleFuelType;
use Illuminate\Http\Request;

class VehicleFuelTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicleFuelTypes = VehicleFuelType::all();

        return view('vehicleFuelTypes.index', compact('vehicleFuelTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehicleFuelTypes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fuel' => 'required',
        ]);

        VehicleFuelType::create($request->all());
        return redirect()->route('vehicleFuelTypes.index')->with('success','Vehicle fuel type created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VehicleFuelType  $vehicleFuelType
     * @return \Illuminate\Http\Response
     */
    public function show(VehicleFuelType $vehicleFuelType)
    {
        return view('vehicleFuelTypes.show',compact('vehicleFuelType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VehicleFuelType  $vehicleFuelType
     * @return \Illuminate\Http\Response
     */
    public function edit(VehicleFuelType $vehicleFuelType)
    {
        return view('vehicleFuelTypes.edit',compact('vehicleFuelType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VehicleFuelType  $vehicleFuelType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VehicleFuelType $vehicleFuelType)
    {
        $request->validate([
            'fuel' => 'required',
        ]);

        $vehicleFuelType->update($request->all());
        return redirect()->route('vehicleFuelTypes.index')->with('success','vehicleFuelType updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VehicleFuelType  $vehicleFuelType
     * @return \Illuminate\Http\Response
     */
    public function destroy(VehicleFuelType $vehicleFuelType)
    {
        $vehicleFuelType->delete();

        return redirect()->route('vehicleFuelTypes.index')->with('success','vehicleFuelType deleted successfully');
    }
}
