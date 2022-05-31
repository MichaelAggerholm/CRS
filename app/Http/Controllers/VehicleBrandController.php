<?php

namespace App\Http\Controllers;

use App\Models\VehicleBrand;
use Illuminate\Http\Request;

class VehicleBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicleBrands = VehicleBrand::all();

        return view('vehicleBrands.index', compact('vehicleBrands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehicleBrands.create');
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
            'brand' => 'required',
        ]);

        VehicleBrand::create($request->all());
        return redirect()->route('vehicleBrands.index')->with('success','Vehicle Brand created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VehicleBrand  $vehicleBrand
     * @return \Illuminate\Http\Response
     */
    public function show(VehicleBrand $vehicleBrand)
    {
        return view('vehicleBrands.show',compact('vehicleBrand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VehicleBrand  $vehicleBrand
     * @return \Illuminate\Http\Response
     */
    public function edit(VehicleBrand $vehicleBrand)
    {
        return view('vehicleBrands.edit',compact('vehicleBrand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VehicleBrand  $vehicleBrand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VehicleBrand $vehicleBrand)
    {
        $request->validate([
            'brand' => 'required',
        ]);

        $vehicleBrand->update($request->all());
        return redirect()->route('vehicleBrands.index')->with('success','Vehicle Brands updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VehicleBrand  $vehicleBrand
     * @return \Illuminate\Http\Response
     */
    public function destroy(VehicleBrand $vehicleBrand)
    {
        $vehicleBrand->delete();

        return redirect()->route('vehicleBrands.index')->with('success','Vehicle Brands deleted successfully');
    }
}
