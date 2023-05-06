<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Basket;
use App\Models\User;

class BasketsController extends Controller
{
    public function getByUserId(Request $request, $user_id)
    {
        // find user with the user id
        $user = User::find($user_id);

        if (!$user) {
            return response()->json([
                'status' => 404,
                'message' => 'User not found'
            ], 404);
        }

        // Retrieve all products in the user's basket
        $products = Product::join('baskets', 'products.id', '=', 'baskets.product_id')
            ->where('baskets.user_id', $user->id)
            ->select('baskets.product_id', 'baskets.quantity')
            ->get();

        // Return the products
        if ($products->isEmpty()) {
            return response()->json([
                'status' => 204,
                'user' => $user,
                'products' => 'The basket is empty.',
            ], 204);
        }

        return response()->json([
            'status' => 200,
            'user' => $user,
            'products' => $products,
        ], 200);
    }

    public function add(Request $request, $user_id, $product_id, $quantity)
    {
        // does user exist
        if (!User::find($user_id)) {
            return response()->json([
                'status' => 404,
                'message' => 'User not found'
            ], 404);
        }

        // does product exist
        if (!Product::find($product_id)) {
            return response()->json([
                'status' => 404,
                'message' => 'Product not found'
            ], 404);
        }

        // find existing basket
        $basket = Basket::where('user_id', $user_id)
            ->where('product_id', $product_id)
            ->first();

        if ($basket) {
            $basket->quantity = $quantity;
            $basket->save();
        } else {
            $basket = new Basket;
            $basket->user_id = $user_id;
            $basket->product_id = $product_id;
            $basket->quantity = $quantity;
            $basket->save();
        }

        return response()->json([
            'status' => 200,
            'message' => 'Product added to the basket',
        ], 200);
    }

    public function deleteItem(Request $request, $user_id, $product_id)
    {
        // does user exist
        if (!User::find($user_id)) {
            return response()->json([
                'status' => 404,
                'message' => 'User not found'
            ], 404);
        }

        // does product exist
        if (!Product::find($product_id)) {
            return response()->json([
                'status' => 404,
                'message' => 'Product not found'
            ], 404);
        }

        // find existing basket
        $basket = Basket::where('user_id', $user_id)
            ->where('product_id', $product_id)
            ->first();

        if (!$basket) {
            return response()->json([
                'status' => 404,
                'message' => 'Basket does not contain product with id ' . $product_id,
            ], 404);
        }

        $basket->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Successfuly deleted',
        ], 200);
    }

    public function deleteAllItems(Request $request, $user_id, $product_id)
    {
        // does user exist
        if (!User::find($user_id)) {
            return response()->json([
                'status' => 404,
                'message' => 'User not found'
            ], 404);
        }

        // does product exist
        if (!Product::find($product_id)) {
            return response()->json([
                'status' => 404,
                'message' => 'Product not found'
            ], 404);
        }

        // find existing basket
        $basket = Basket::where('user_id', $user_id)
            ->where('product_id', $product_id)
            ->first();

        if (!$basket) {
            return response()->json([
                'status' => 404,
                'message' => 'Basket does not contain product with id ' . $product_id,
            ], 404);
        }

        $basket->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Product removed from basket successfully',
        ], 200);
    }

    public function update(Request $request, $user_id, $product_id, $quantity)
    {
        // does user exist
        if (!User::find($user_id)) {
            return response()->json([
                'status' => 404,
                'message' => 'User not found'
            ], 404);
        }

        // does product exist
        if (!Product::find($product_id)) {
            return response()->json([
                'status' => 404,
                'message' => 'Product not found'
            ], 404);
        }

        // find existing basket
        $basket = Basket::where('user_id', $user_id)
            ->where('product_id', $product_id)
            ->first();

        if (!$basket) {
            return response()->json([
                'status' => 404,
                'message' => 'Basket does not contain product with id ' + $product_id,
            ], 404);
        }

        if ($quantity == 0) {
            $basket->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Product removed from basket successfully',
            ], 200);
        }

        $basket->quantity = $quantity;
        $basket->save();

        return response()->json([
            'status' => 200,
            'message' => 'Product quantity updated successfully',
        ], 200);
    }
}