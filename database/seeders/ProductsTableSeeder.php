<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'seller_id' => 1,
            'product_name' => 'Product One',
            'price' => 20.00,
            'likes_num' => 50,
            'description' => 'Description for Product One',
            'category_id' => 1,
        ]);
    }
}
