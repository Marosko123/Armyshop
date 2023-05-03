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
            "ordered_products" => '{"31":5,"34":1,"38":3}',
        
            'delivery' => 'inStorePickup',
            'payment' =>'By card'
        ]);

        FinishedOrder::create([
            "ordered_products" => '{"31":5,"34":1,"38":3}',
        
            'delivery' => 'inStorePickup',
            'payment' =>'By card',
    
            'first_name' =>'ahoj',
            'last_name' =>'joha',
            'email' => 'asdfjk@gla.ck',
            'address' => 'asdfe',
            'zip_code' => 'asdfr',
            'city' => 'hxvn',
            'country' => 'dfg',
            'phone' => 'gyy'
        ]);
    }
}