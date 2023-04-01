<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Basket;
use App\Models\User;
use App\Models\FinishedOrder;

class FinishedOrdersController extends Controller
{
    public function getAll(Request $request)
    {
        $finishedOrders = FinishedOrder::get();

        return response()->json([
            'status' => 200,
            'finishedOrders' => $finishedOrders,
        ], 200);
    }

    public function getAllOfUser(Request $request, $user_id)
    {
        // find user with the user id
        $user = User::find($user_id);

        if (!$user) {
            return response()->json([
                'status' => 404,
                'message' => 'User not found'
            ], 404);
        }

        $finishedOrders = FinishedOrder::get()
            ->where('user_id', $user_id);

        return response()->json([
            'status' => 200,
            'finishedOrders' => $finishedOrders,
        ], 200);
    }

    public function add(Request $request, $user_id)
    {
        // does user exist
        if (!User::find($user_id)) {
            return response()->json([
                'status' => 404,
                'message' => 'User not found'
            ], 404);
        }

        $finishedOrder = new FinishedOrder;
        $finishedOrder->user_id = $user_id;
        $finishedOrder->ordered_products = $request->ordered_products;
        $finishedOrder->save();

        return response()->json([
            'status' => 200,
            'message' => 'Order added to finished orders',
        ], 200);
    }

    public function delete(Request $request, $user_id)
    {
        // does user exist
        if (!User::find($user_id)) {
            return response()->json([
                'status' => 404,
                'message' => 'User not found'
            ], 404);
        }

        // find existing basket
        FinishedOrder::where('user_id', $user_id)
            ->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Finished orders deleted successfully',
        ], 200);
    }
}