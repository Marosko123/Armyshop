<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;
use App\Models\Subcategory;


class ProductsController extends Controller
{
    public function getAll()
    {
        $products = Product::all();
        if ($products) {
            return response()->json([
                'status' => 200,
                'products' => $products
            ], 200);
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'Failed to get products from database.'
            ], 500);
        }
    }

    public function getOne($product_id)
    {
        $product = Product::find($product_id);
        if ($product) {
            return response()->json([
                'status' => 200,
                'product' => $product
            ], 200);
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'Failed to get product from database.'
            ], 500);
        }
    }

    public function getFromCategory($category_id)
    {
        // $subs = Subcategory::where('category_id', (int) $category_id)->get();
        // $products = [];

        // foreach ($subs as $subcategory) {
        //     $foundProducts = Product::where('subcategory_id', $subcategory->id)->get();
        //     array_push($products, ...$foundProducts);
        // }

        $products = Product::whereIn('subcategory_id', function ($query) use ($category_id) {
            $query->select('id')
                ->from('subcategories')
                ->where('category_id', $category_id);
        })->get();


        if ($products) {
            return response()->json([
                'status' => 200,
                'products' => $products
            ], 200);
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'Failed to get products from database.'
            ], 500);
        }
    }

    public function getFromSubcategory($subcategory_id)
    {
        $products = Product::where('subcategory_id', $subcategory_id)->get();
        if (count($products) > 0) {
            return response()->json([
                'status' => 200,
                'products' => $products
            ], 200);
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'Failed to get products from database.'
            ], 500);
        }
    }

    public function getSearchedProducts(Request $request)
    {
        $searchTerm = $request->query('q');

        if ($searchTerm) {
            $result = Product::where('name', 'like', '%' . $searchTerm . '%')
                ->orWhere('description', 'like', '%' . $searchTerm . '%')
                ->get();
        }

        return response()->json([
            'status' => 200,
            'products' => $result ?? []
        ], 200);
    }

    public function getMostPopular($amount)
    {

    }

    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:20',
            'price' => 'required|numeric|between:0,9999999.9',
            'description' => 'required|string|max:300',
            'image_url' => 'string|max:200',
            'alt_text' => 'string|max:50',
            'subcategory_id' => 'required|integer|min:0',
            'license_needed' => 'required|boolean'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'message' => $validator->messages()
            ], 422);
        } else {
            $product = Product::create([
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'image_url' => $request->image_url,
                'alt_text' => $request->alt_text,
                'subcategory_id' => $request->subcategory_id,
                'license_needed' => $request->license_needed
            ]);

            if ($product) {
                return response()->json([
                    'status' => 200,
                    'product' => $product
                ], 200);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => 'User was not created.'
                ], 500);
            }
        }
    }
}