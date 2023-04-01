<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\ChatRoom;

class ChatRoomsController extends Controller
{
    public function get(Request $request)
    {
        $chatRooms = ChatRoom::get();

        return response()->json([
            'status' => 200,
            'chatRooms' => $chatRooms
        ], 200);
    }

    public function getRoomsOfUser(Request $request, $user_id)
    {
        $user = User::find($user_id);

        if (!$user) {
            return response()->json([
                'status' => 404,
                'message' => 'User not found'
            ], 404);
        }

        $chatRooms = ChatRoom::where('user_id', $user_id)
            ->pluck('room_id');

        return response()->json([
            'status' => 200,
            'chatRooms' => $chatRooms
        ], 200);
    }

    public function getUsersWithPermission(Request $request, $room_id)
    {
        $roomWithUsers = ChatRoom::where('room_id', $room_id)
            ->pluck('user_id');

        if ($roomWithUsers->count() == 0) {
            return response()->json([
                'status' => 404,
                'message' => 'Room does not exist'
            ], 404);
        }

        return response()->json([
            'status' => 200,
            'roomWithUsers' => $roomWithUsers
        ], 200);
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'room_name' => 'required|string|min:5|max:64',
            'user_ids' => 'required|array|min:2',
            'user_ids.*' => 'numeric'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'message' => $validator->messages()
            ], 422);
        }

        $room_id = ChatRoom::orderBy('room_id', 'desc')
            ->pluck('room_id')
            ->first();

        if (!$room_id) {
            $room_id = 0;
        }

        $room_id++;

        foreach ($request['user_ids'] as $user_id) {
            $chatRoom = new ChatRoom;
            $chatRoom->room_name = $request->room_name;
            $chatRoom->user_id = $user_id;
            $chatRoom->room_id = $room_id;
            $chatRoom->save();
        }

        return response()->json([
            'status' => 200,
            'message' => 'Chat room created successfully',
            'chat_room' => $chatRoom
        ], 200);
    }

    public function delete(Request $request, $room_id)
    {
        ChatRoom::where('room_id', $room_id)
            ->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Chat room deleted successfully'
        ], 200);
    }
}