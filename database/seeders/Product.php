<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductO extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([ 'product_name' => 'Product 1', 'price' => '10', 'discount' => '2', ],
                        [ 'product_name' => 'Product 2', 'price' => '20', 'discount' => '5', ]);
    }
}
