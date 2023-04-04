<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'paid_amount',
        'discount_amount',
        'total_amount',
        'user_id',
        'created_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bookingProducts()
    {
        return $this->belongsToMany(BookingProduct::class);
    }
}
