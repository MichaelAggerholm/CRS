<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class VehicleBrand extends Model
{
    use HasFactory, SoftDeletes, CascadeSoftDeletes;

    protected $cascadeDeletes = ['vehicles', 'vehicle_models'];

    protected $table = 'vehicle_brands'; // vehicleBrands

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'brand',
    ];

    public function vehicles(){
        return $this->hasMany(Vehicle::class);
    }

    public function vehicle_models(){
        return $this->hasMany(VehicleModel::class);
    }
}
