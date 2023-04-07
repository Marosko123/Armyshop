<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            "id" => 1,
            "name" => "AK-47",
            "price" => 599.99,
            "description" => "The AK-47 is a selective-fire, gas-operated assault rifle developed in the Soviet Union by Mikhail Kalashnikov in the late 1940s. It is one of the most widely used assault rifles in the world, known for its reliability, simplicity, and low production cost. It fires 7.62x39mm cartridges and can be used in various modes of fire, including semi-automatic and automatic.",
            "image_url" => "ak47-1.jpg",
            "subcategory_id" => 2,
            "license_needed" => true
        ]);

        Product::create([
            "id" => 2,
            "name" => "Desert Eagle",
            "price" => 299.99,
            "description" => "The Desert Eagle is a large semi-automatic handgun designed by Magnum Research Inc. It was first introduced in 1983 and has since become a popular choice for sport shooting, hunting, and personal defense.",
            "image_url" => "ak47-1.jpg",
            "subcategory_id" => 1,
            "license_needed" => true
        ]);

        Product::create([
            "id" => 3,
            "name" => "MAG-7",
            "price" => 499.99,
            "description" => "The MAG-7 is a pump-action shotgun designed and manufactured by the German company, Heinrich Krieghoff GmbH. It was introduced in 1997 and is known for its compact size and lightweight design, making it a popular choice for close-quarters combat and urban operations. The MAG-7 has a magazine capacity of 5 rounds and fires 12-gauge shells.",
            "image_url" => "ak47-1.jpg",
            "subcategory_id" => 4,
            "license_needed" => true
        ]);

        Product::create([
            "id" => 4,
            "name" => "Glock-18",
            "price" => 99.99,
            "description" => "The Glock 18 is a selective-fire, full-automatic machine pistol designed and manufactured by the Austrian company, Glock. It was introduced in 1986 and is known for its high rate of fire and reliability. The pistol has a 17-round magazine capacity and fires 9x19mm Parabellum cartridges.",
            "image_url" => "ak47-1.jpg",
            "subcategory_id" => 1,
            "license_needed" => true
        ]);

        Product::create([
            "id" => 5,
            "name" => "Glock-18",
            "price" => 99.99,
            "description" => "The Glock 18 is a selective-fire, full-automatic machine pistol designed and manufactured by the Austrian company, Glock. It was introduced in 1986 and is known for its high rate of fire and reliability. The pistol has a 17-round magazine capacity and fires 9x19mm Parabellum cartridges.",
            "image_url" => "ak47-1.jpg",
            "subcategory_id" => 1,
            "license_needed" => true
        ]);

        Product::create([
            "id" => 6,
            "name" => "Glock-18",
            "price" => 99.99,
            "description" => "The Glock 18 is a selective-fire, full-automatic machine pistol designed and manufactured by the Austrian company, Glock. It was introduced in 1986 and is known for its high rate of fire and reliability. The pistol has a 17-round magazine capacity and fires 9x19mm Parabellum cartridges.",
            "image_url" => "ak47-1.jpg",
            "subcategory_id" => 1,
            "license_needed" => true
        ]);

        Product::create([
            "id" => 7,
            "name" => "Glock-18",
            "price" => 99.99,
            "description" => "The Glock 18 is a selective-fire, full-automatic machine pistol designed and manufactured by the Austrian company, Glock. It was introduced in 1986 and is known for its high rate of fire and reliability. The pistol has a 17-round magazine capacity and fires 9x19mm Parabellum cartridges.",
            "image_url" => "ak47-1.jpg",
            "subcategory_id" => 1,
            "license_needed" => true
        ]);

        Product::create([
            "id" => 8,
            "name" => "Glock-18",
            "price" => 99.99,
            "description" => "The Glock 18 is a selective-fire, full-automatic machine pistol designed and manufactured by the Austrian company, Glock. It was introduced in 1986 and is known for its high rate of fire and reliability. The pistol has a 17-round magazine capacity and fires 9x19mm Parabellum cartridges.",
            "image_url" => "ak47-1.jpg",
            "subcategory_id" => 1,
            "license_needed" => true
        ]);

        Product::create([
            "id" => 9,
            "name" => "Glock-18",
            "price" => 99.99,
            "description" => "The Glock 18 is a selective-fire, full-automatic machine pistol designed and manufactured by the Austrian company, Glock. It was introduced in 1986 and is known for its high rate of fire and reliability. The pistol has a 17-round magazine capacity and fires 9x19mm Parabellum cartridges.",
            "image_url" => "ak47-1.jpg",
            "subcategory_id" => 1,
            "license_needed" => true
        ]);

        Product::create([
            "id" => 10,
            "name" => "Glock-18",
            "price" => 99.99,
            "description" => "The Glock 18 is a selective-fire, full-automatic machine pistol designed and manufactured by the Austrian company, Glock. It was introduced in 1986 and is known for its high rate of fire and reliability. The pistol has a 17-round magazine capacity and fires 9x19mm Parabellum cartridges.",
            "image_url" => "ak47-1.jpg",
            "subcategory_id" => 1,
            "license_needed" => true
        ]);

        Product::create([
            "id" => 11,
            "name" => "Glock-18",
            "price" => 99.99,
            "description" => "The Glock 18 is a selective-fire, full-automatic machine pistol designed and manufactured by the Austrian company, Glock. It was introduced in 1986 and is known for its high rate of fire and reliability. The pistol has a 17-round magazine capacity and fires 9x19mm Parabellum cartridges.",
            "image_url" => "ak47-1.jpg",
            "subcategory_id" => 1,
            "license_needed" => true
        ]);

        Product::create([
            "id" => 12,
            "name" => "Glock-18",
            "price" => 99.99,
            "description" => "The Glock 18 is a selective-fire, full-automatic machine pistol designed and manufactured by the Austrian company, Glock. It was introduced in 1986 and is known for its high rate of fire and reliability. The pistol has a 17-round magazine capacity and fires 9x19mm Parabellum cartridges.",
            "image_url" => "ak47-1.jpg",
            "subcategory_id" => 1,
            "license_needed" => true
        ]);

        Product::create([
            "id" => 13,
            "name" => "Glock-18",
            "price" => 99.99,
            "description" => "The Glock 18 is a selective-fire, full-automatic machine pistol designed and manufactured by the Austrian company, Glock. It was introduced in 1986 and is known for its high rate of fire and reliability. The pistol has a 17-round magazine capacity and fires 9x19mm Parabellum cartridges.",
            "image_url" => "ak47-1.jpg",
            "subcategory_id" => 1,
            "license_needed" => true
        ]);

        Product::create([
            "id" => 14,
            "name" => "Glock-18",
            "price" => 99.99,
            "description" => "The Glock 18 is a selective-fire, full-automatic machine pistol designed and manufactured by the Austrian company, Glock. It was introduced in 1986 and is known for its high rate of fire and reliability. The pistol has a 17-round magazine capacity and fires 9x19mm Parabellum cartridges.",
            "image_url" => "ak47-1.jpg",
            "subcategory_id" => 1,
            "license_needed" => true
        ]);

        Product::create([
            "id" => 15,
            "name" => "Glock-18",
            "price" => 99.99,
            "description" => "The Glock 18 is a selective-fire, full-automatic machine pistol designed and manufactured by the Austrian company, Glock. It was introduced in 1986 and is known for its high rate of fire and reliability. The pistol has a 17-round magazine capacity and fires 9x19mm Parabellum cartridges.",
            "image_url" => "ak47-1.jpg",
            "subcategory_id" => 1,
            "license_needed" => true
        ]);

        Product::create([
            "id" => 16,
            "name" => "Glock-18",
            "price" => 99.99,
            "description" => "The Glock 18 is a selective-fire, full-automatic machine pistol designed and manufactured by the Austrian company, Glock. It was introduced in 1986 and is known for its high rate of fire and reliability. The pistol has a 17-round magazine capacity and fires 9x19mm Parabellum cartridges.",
            "image_url" => "ak47-1.jpg",
            "subcategory_id" => 1,
            "license_needed" => true
        ]);
    }
}