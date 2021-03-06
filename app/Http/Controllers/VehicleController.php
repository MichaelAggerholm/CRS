<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::all();

        return view('vehicles.index', compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehicles.create');
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
            'vehicle_type_id' => 'required',
            'vehicle_brand_id' => 'required',
            'vehicle_model_id' => 'required',
            'vehicle_fuel_type_id' => 'required',
            'engine_size' => 'required',
            'color' => 'required',
            'mileage' => 'required',
            'power' => 'required',
            'images' => 'required',
            'production_year' => 'required',
            'daily_price' => 'required',
            'chassis_number' => 'required',
            'plate_number' => 'required',
        ]);

        Vehicle::create($request->all());
        return redirect()->route('vehicles.index')->with('success','vehicle created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        return view('vehicles.show',compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        return view('vehicles.edit',compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        $request->validate([
            'vehicle_type_id' => 'required',
            'vehicle_brand_id' => 'required',
            'vehicle_model_id' => 'required',
            'vehicle_fuel_type_id' => 'required',
            'engine_size' => 'required',
            'color' => 'required',
            'mileage' => 'required',
            'power' => 'required',
            'images' => 'required',
            'production_year' => 'required',
            'daily_price' => 'required',
            'chassis_number' => 'required',
            'plate_number' => 'required',
        ]);

        $vehicle->update($request->all());
        return redirect()->route('vehicles.index')->with('success','vehicle updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();

        return redirect()->route('vehicles.index')->with('success','vehicle deleted successfully');
    }
}
