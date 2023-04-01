<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function get()
    {
        $categories = Category::all();
        if ($categories->isEmpty()) {
            return response()->json([
                'status' => 404,
                'message' => 'No Records Found',
            ], 404);
        }

        return response()->json([
            'status' => 200,
            'categories' => $categories,
        ], 200);
    }

    public function getById($id)
    {
        $category = Category::find($id);

        if ($category) {
            return response()->json([
                'status' => 200,
                'category' => $category
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Category not found'
            ]);
        }
    }

    public function getByName($name)
    {
        $category = Category::where('name', $name)->first();

        if ($category) {
            return response()->json([
                'status' => 200,
                'category' => $category
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Category not found'
            ]);
        }
    }

    public function add()
    {
        $categoryList = ['Weapons', 'Transport', 'Clothing', 'Explosives', 'Equipment', 'Accessories'];
        $created = 0;
        for ($i = 0; $i < 6; $i++) {
            $category = Category::create([
                'name' => $categoryList[$i]
            ]);
            if ($category) {
                $created++;
            }
        }
        if ($created == 6) {
            return response()->json([
                'status' => 200,
                'message' => 'Categories created successfully'
            ]);
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'Something went wrong'
            ]);
        }
    }
}