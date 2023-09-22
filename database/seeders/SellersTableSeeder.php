<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SellersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sellers')->insert([
            'email_seller' => 'seller1@example.com',
            'sellerfullname' => 'Seller One',
            'pwd' => bcrypt('password1'),
            'bizname' => 'Biz One',
            'state' => 'California',
            'phone_number' => '123-456-7890',
            'biz_logo' => 'biz1_logo.jpg',
            'min_price' => 10.00,
            'max_price' => 50.00,
            'num_likes' => 100,
        ]);
    }
}
