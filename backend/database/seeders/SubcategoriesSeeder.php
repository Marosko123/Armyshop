<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Subcategory;

class SubcategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategoriesDict = [
            // Weapons
            ['Pistols', 'Rifles', 'SMGs', 'Heavy', 'Knives'],
            // Transport
            ['Cars', 'Motorcycles', 'Panzers', 'Planes', 'Boats'],
            // Clothing
            ['Jackets', 'Trousers', 'Shoes', 'Pants', 'Socks'],
            // Explosives
            ['C4s', 'Nukes', 'Grenades', 'TNTs', 'Bombs'],
            // Equipment
            ['Backpacks', 'Hunting', 'Camping'],
            // Accessories
            ['Glasses', 'Face paint', 'Camouflage'],
        ];

        foreach ($subcategoriesDict as $categoryId => $subcategories) {
            $category = Category::find($categoryId + 1);
            foreach ($subcategories as $subcategoryName) {
                $subcategory = new Subcategory;
                $subcategory->name = $subcategoryName;
                $subcategory->category_id = $category->id;
                $subcategory->save();
            }
        }
        $this->command->info('Subcategories created successfully.');
    }
}