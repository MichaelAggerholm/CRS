<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'rentals';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'customer_id',
        'employee_id',
        'vehicle_id',
        'total_rental_price',
        'rental_begin',
        'rental_end',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function insurance()
    {
        return $this->belongsTo(Insurance::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
