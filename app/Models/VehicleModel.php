<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class VehicleModel extends Model
{
    use HasFactory, SoftDeletes, CascadeSoftDeletes, Sortable;

    protected $cascadeDeletes = ['vehicles'];

    protected $table = 'vehicle_models';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'model',
        'vehicle_brand_id',
    ];

    public $sortable = [
        'id',
        'model',
        'vehicle_brand_id',
    ];

    public function vehicle_brand()
    {
        return $this->belongsTo(VehicleBrand::class);
    }

    public function vehicles(){
        return $this->hasMany(Vehicle::class);
    }
}
