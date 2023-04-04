<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('booking_id')->constrained('bookings');
            $table->unsignedBigInteger('product_id')->constrained('products');
            $table->integer('price');
            $table->integer('discount')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_products');
    }
}
