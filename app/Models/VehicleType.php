<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class VehicleType extends Model
{
    use HasFactory, SoftDeletes, CascadeSoftDeletes, Sortable;

    protected $cascadeDeletes = ['vehicles'];

    protected $table = 'vehicle_types';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'type',
    ];

    // Felter som skal inkluderes i filtrering på index siden.
    public $sortable = [
        'id',
        'type',
    ];

    public function vehicles(){
        return $this->hasMany(Vehicle::class);
    }
}
