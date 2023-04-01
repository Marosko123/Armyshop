<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FinishedOrder;

class FinishedOrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FinishedOrder::create([
            "user_id" => 4,
            "ordered_products" => '{"0":{"product_id":1,"quantity":125},"1":{"product_id":2,"quantity":36}}'
        ]);

        FinishedOrder::create([
            "user_id" => 4,
            "ordered_products" => '{"0":{"product_id":2,"quantity":95},"1":{"product_id":3,"quantity":445}}'
        ]);

        FinishedOrder::create([
            "user_id" => 4,
            "ordered_products" => '{"0":{"product_id":3,"quantity":552},"1":{"product_id":4,"quantity":437}}'
        ]);
    }
}