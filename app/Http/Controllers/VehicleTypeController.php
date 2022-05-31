<?php

namespace App\Http\Controllers;

use App\Models\VehicleType;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class VehicleTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(Request $request)
    {
        // Search input on publishers.index view
        $searchTerm = $request->input('searchVehicleTypes');

        // Returnerer index siden med søgning, filtrering og pagination.
        return view('vehicleTypes.index', ['vehicleTypes' => VehicleType::when(
            $searchTerm, function ($query) use ($searchTerm) {
            $query->where('type', 'LIKE', '%' . $searchTerm . '%');
        })->sortable()->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehicleTypes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
        ]);

        VehicleType::create($request->all());
        return redirect()->route('vehicleTypes.index')->with('success', 'vehicle Type created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\VehicleType $vehicleType
     * @return \Illuminate\Http\Response
     */
    public function show(VehicleType $vehicleType)
    {
        return view('vehicleTypes.show', compact('vehicleType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\VehicleType $vehicleType
     * @return \Illuminate\Http\Response
     */
    public function edit(VehicleType $vehicleType)
    {
        return view('vehicleTypes.edit', compact('vehicleType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\VehicleType $vehicleType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VehicleType $vehicleType)
    {
        $request->validate([
            'type' => 'required',
        ]);

        $vehicleType->update($request->all());
        return redirect()->route('vehicleTypes.index')->with('success', 'vehicle Type updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\VehicleType $vehicleType
     * @return \Illuminate\Http\Response
     */
    public function destroy(VehicleType $vehicleType)
    {
        $vehicleType->delete();

        return redirect()->route('vehicleTypes.index')->with('success', 'vehicle Type deleted successfully');
    }
}
