<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Subcategory;
use App\Models\Category;
use Illuminate\Http\Request;


class SubcategoriesController extends Controller
{
    public function getByCategory($category_id)
    {
        $subcategories = Subcategory::where('category_id', $category_id)->get();

        if ($subcategories) {
            return response()->json([
                'status' => 200,
                'subcategories' => $subcategories
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Subcategories not found'
            ]);
        }
    }

    public function getById($category_id, $name)
    {
        $subcategory = Subcategory::where('category_id', $category_id)
            ->where('name', $name)
            ->first();

        if ($subcategory) {
            return response()->json([
                'status' => 200,
                'subcategory' => $subcategory
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Subcategory not found'
            ]);
        }
    }

    public function add($category_id)
    {

        $subcategoriesDict = [
            ['Pistols', 'Rifles', 'SMGs', 'Heavy', 'Knives'],
            // Weapons
            ['Cars', 'Motorcycles', 'Panzers', 'Planes', 'Boats'],
            // Transport
            ['Jackets', 'Shirts', 'Pants', 'Shoes', 'Socks'],
            // Clothing
            ['C4s', 'Nukes', 'Grenades', 'TNTs', 'Bombs'],
            // Explosives
            ['Backpacks', 'Hunting', 'Camping'],
            // Equipment
            ['Glasses', 'Paint', 'Camouflage'], // Accessories
        ];
        $subcategories = $subcategoriesDict[$category_id - 1];
        $created = 0;
        $createdAll = false;

        foreach ($subcategories as $subcategory) {
            $subcategoryObject['name'] = $subcategory;
            $subcategoryObject['category_id'] = $category_id;
            $isCreated = Subcategory::create($subcategoryObject);
            if ($isCreated) {
                $created++;
            }
        }

        if ($created == count($subcategories)) {
            $createdAll = true;
        }

        if ($createdAll) {
            return response()->json([
                'status' => 200,
                'message' => 'Subcategories created successfully.'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'All subcategories did not successfully create.'
            ]);
        }
    }

    public function addAll()
    {
        $categories = Category::all();
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
        $createdAll = true;

        foreach ($categories as $category) {
            $subcategories = $subcategoriesDict[$category->id - 1];
            $created = 0;

            foreach ($subcategories as $subcategory) {
                $subcategoryObject['name'] = $subcategory;
                $subcategoryObject['category_id'] = $category->id;
                $isCreated = Subcategory::create($subcategoryObject);
                if ($isCreated) {
                    $created++;
                }
            }

            if ($created != count($subcategories)) {
                $createdAll = false;
            }
        }

        if ($createdAll) {
            return response()->json([
                'status' => 200,
                'message' => 'Subcategories created successfully.'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'All subcategories did not successfully create.'
            ]);
        }
    }

}