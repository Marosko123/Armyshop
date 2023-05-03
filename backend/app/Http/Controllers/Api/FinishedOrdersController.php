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
        // if ($user_id != null && !User::find($user_id)) {
        //     return response()->json([
        //         'status' => 404,
        //         'message' => 'User not found'
        //     ], 404);
        // }

        $finishedOrder = new FinishedOrder;
        $finishedOrder->delivery = $request->delivery;
        $finishedOrder->payment = $request->payment;
        $finishedOrder->ordered_products = $request->ordered_products;

        if($user_id != null){
            $finishedOrder->user_id = $user_id;
        }

        else{
            $finishedOrder->first_name = $request->first_name;
            $finishedOrder->last_name = $request->last_name;
            $finishedOrder->email = $request->email;
            $finishedOrder->address = $request->address;
            $finishedOrder->zip_code = $request->zip_code;
            $finishedOrder->city = $request->city;
            $finishedOrder->country = $request->country;
            $finishedOrder->phone = $request->phone;
        }

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