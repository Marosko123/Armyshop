<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LikedProduct;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LikedProductsController extends Controller
{
    public function get($user_id)
    {
        $products = LikedProduct::where('user_id', $user_id)->get();

        if ($products) {
            if (count($products) > 0) { // more than 0 products
                return response()->json([
                    'status' => 200,
                    'products' => $products
                ], 200);
            } else { // 0 products
                return response()->json([
                    'status' => 201,
                    'products' => 'The user has 0 liked products'
                ], 201);
            }
        } else {
            return response()->json([
                // failed to get products
                'status' => 500,
                'message' => 'Failed to get products from database.'
            ], 500);
        }
    }

    public function add($user_id, $product_id)
    {
        // check if this user_id exists

        $user = User::find($user_id);

        if(!$user) {
            return response()->json([
                'status' => 404,
                'message' => 'User with this ID was not found.'
            ], 404);
        }

        $liked = [
            'user_id' => $user_id,
            'product_id' => $product_id
        ];

        $validator = Validator::make($liked, [
            'user_id' => 'required|integer:0,9999999',
            'product_id' => 'required|integer:0,9999999',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'message' => $validator->messages()
            ], 422);
        } else {
            if ($liked) {
                $createdProduct = LikedProduct::create($liked);
                if (!$createdProduct)
                {
                    return response()->json([
                        'status' => 500,
                        'message' => 'Liked product was not created.'
                    ], 500);
                }
                    
                return response()->json([
                    'status' => 200,
                    'liked_product' => $liked
                ], 200);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => 'Liked product was not created.'
                ], 500);
            }
        }
    }

    public function delete($user_id, $product_id)
    {
        // check if this user_id exists

        // $user = User::find($user_id);

        // if(!$user) {
        //     return response()->json([
        //         'status' => 502,
        //         'message' => 'User with this ID was not found.'
        //     ], 502);
        // }

        // find this entry in database
        $foundProduct = LikedProduct::where('user_id', $user_id)
            ->where('product_id', $product_id)
            ->first();

        if ($foundProduct) {
            $foundProduct->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Product was successfully removed from liked products.'
            ], 200);
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'Product was not found in liked products.'
            ], 500);
        }
    }

    public function getMostPopular($amount)
    {
        $mostLikedProducts = LikedProduct::selectRaw('count(*) as count, product_id')
            ->groupBy('product_id')
            ->orderBy('count', 'desc')
            ->limit($amount)
            ->get();

        if (!$mostLikedProducts) {
            return response()->json([
                'status' => 404,
                'message' => 'Could not find any liked products.'
            ], 404);
        }
        $productIds = $mostLikedProducts->pluck('product_id');
        $mostPopularProducts = Product::whereIn('id', $productIds)->get();
        if (!$mostPopularProducts) {
            return response()->json([
                'status' => 404,
                'message' => 'Could not find any most popular products.'
            ], 404);
        }
        return $mostPopularProducts;
    }
}