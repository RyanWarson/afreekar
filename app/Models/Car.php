<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{

    protected $fillable = [
        'image',
        'name',
        'registration_number',
        'type',
        'brand',
        'transmission',
        'seats',
        'capacity',
        'price_per_day',
    ];
    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }

    use HasFactory;
}
