<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerCar extends Model
{
    use HasFactory;

    protected $table = 'customer_car';

    protected $fillable = [
        'customer_id',
        'car_id',
        // Add more fields as needed
    ];
}
