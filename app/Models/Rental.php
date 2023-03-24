<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{

    protected $fillable = [
        'user_id',
        'car_id',
        'start_date',
        'duration',
        'end_date',
        'total_price',
        'total_revenue',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    use HasFactory;
}
