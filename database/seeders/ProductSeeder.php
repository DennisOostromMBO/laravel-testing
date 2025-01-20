<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Apple',
            'description' => 'Green',
            'price' => 10.99
        ]);

        Product::create([
            'name' => 'Banana',
            'description' => 'Yellow',
            'price' => 20.50
        ]);
    }
}

