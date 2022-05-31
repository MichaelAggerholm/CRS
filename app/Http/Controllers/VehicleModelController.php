<?php

namespace App\Http\Controllers;

use App\Models\VehicleModel;
use App\Models\VehicleBrand;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class VehicleModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $vehicleModels = VehicleModel::all();
        $vehicle_brands = VehicleBrand::all();

        return view('vehicleModels.index', compact(['vehicleModels', 'vehicle_brands']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $vehicle_brands = VehicleBrand::all();
        $selected_vehicle_brand = VehicleBrand::first()->vehicle_brand_id;

        return view('vehicleModels.create', compact(['vehicle_brands'], ['selected_vehicle_brand']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return string
     */
    public function store(Request $request)
    {
        $request->validate([
            'model' => 'required',
            'vehicle_brand_id' => 'required',
        ]);

        try {
            VehicleModel::create($request->all());
            return redirect()->route('vehicleModels.index')->with('success','vehicle Model created successfully.');
        } catch (QueryException $e) {
            return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param VehicleModel $vehicleModel
     * @return Application|Factory|View
     */
    public function show(VehicleModel $vehicleModel)
    {
        $vehicle_brands = VehicleBrand::all();

        return view('vehicleModels.show', compact(['vehicleModel', 'vehicle_brands']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param VehicleModel $vehicleModel
     * @return Application|Factory|View
     */
    public function edit(VehicleModel $vehicleModel)
    {
        $vehicle_brands = VehicleBrand::all();
        $selected_vehicle_brand = $vehicleModel->getAttribute('vehicle_brand_id');

        return view('vehicleModels.edit', ['model' => $vehicleModel, 'brands' => $vehicle_brands, 'selected_brand' => $selected_vehicle_brand]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param VehicleModel $vehicleModel
     * @return string
     */
    public function update(Request $request, VehicleModel $vehicleModel)
    {
        $request->validate([
            'model' => 'required',
            'vehicle_brand_id' => 'required',
        ]);

        try {
            $vehicleModel->update($request->all());
            return redirect()->route('vehicleModels.index')->with('success','vehicle Model updated successfully.');
        } catch (QueryException $e) {
            return $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param VehicleModel $vehicleModel
     * @return RedirectResponse
     */
    public function destroy(VehicleModel $vehicleModel)
    {
        $vehicleModel->delete();

        return redirect()->route('vehicleModels.index')->with('success','vehicle Model deleted successfully');
    }
}
