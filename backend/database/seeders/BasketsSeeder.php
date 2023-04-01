<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Basket;

class BasketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Basket::create([
            "user_id" => 4,
            "product_id" => 1,
            "quantity" => 25
        ]);

        Basket::create([
            "user_id" => 4,
            "product_id" => 2,
            "quantity" => 13
        ]);

        Basket::create([
            "user_id" => 4,
            "product_id" => 3,
            "quantity" => 153
        ]);
    }
}