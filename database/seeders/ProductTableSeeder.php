<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Product::create([
        //     'name' => 'Book',
        //     'price' => 100,
        //     'description' => 'This is book'
        // ]);
        // Product::create([
        //     'name' => 'Pen',
        //     'price' => 100,
        //     'description' => 'This is pen'
        // ]);
        // Product::create([
        //     'name' => 'water',
        //     'price' => 333,
        //     'description' => 'This is water'
        // ]);
        // Product::create([
        //     'name' => 'book',
        //     'price' => 55,
        //     'description' => 'This is note'
        // ]);
        // Product::create([
        //     'name' => 'TV',
        //     'price' => 444,
        //     'description' => 'This is Tv'
        // ]);
        Product::factory()->count(50)->create();

    }
}
