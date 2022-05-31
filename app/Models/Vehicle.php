<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'vehicles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'vehicle_type_id',
        'vehicle_brand_id',
        'vehicle_model_id',
        'vehicle_fuel_type_id',
        'engine_size',
        'color',
        'mileage',
        'power',
        'images',
        'production_year',
        'daily_price',
        'chassis_number',
        'plate_number',
    ];

    public function vehicle_brand()
    {
        return $this->belongsTo(VehicleBrand::class);
    }

    public function vehicle_fuel_type()
    {
        return $this->belongsTo(VehicleFuelType::class);
    }

    public function vehicle_model()
    {
        return $this->belongsTo(VehicleModel::class);
    }

    public function vehicle_type()
    {
        return $this->belongsTo(VehicleType::class);
    }

    public function rentals(){
        return $this->hasMany(Rental::class);
    }
}
