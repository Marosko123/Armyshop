<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Subcategory;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryList = ['Weapons', 'Transport', 'Clothing', 'Explosives', 'Equipment', 'Accessories'];
        $created = 0;
        foreach ($categoryList as $categoryName) {
            $category = Category::create([
                'name' => $categoryName,
            ]);
            if ($category) {
                $created++;
            }
        }
        if ($created == count($categoryList)) {
            $this->command->info('Categories created successfully');
        } else {
            $this->command->error('Something went wrong');
        }
    }
}