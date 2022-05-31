<?php

use App\Http\Controllers\VehicleFuelTypeController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\VehicleBrandController;
use App\Http\Controllers\VehicleModelController;
use App\Http\Controllers\VehicleTypeController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\RentalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('vehicleFuelTypes', VehicleFuelTypeController::class);
Route::resource('administrators', AdministratorController::class);
Route::resource('vehicleBrands', VehicleBrandController::class);
Route::resource('vehicleModels', VehicleModelController::class);
Route::resource('vehicleTypes', VehicleTypeController::class);
Route::resource('insurances', InsuranceController::class);
Route::resource('customers', CustomerController::class);
Route::resource('employees', EmployeeController::class);
Route::resource('vehicles', VehicleController::class);
Route::resource('rentals', RentalController::class);
