<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'price',
        'discount',
        'created_at',
    ];

    public function bookingProducts()
    {
        return $this->hasMany(BookingProduct::class);
    }
}
