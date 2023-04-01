<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\User;
use App\Models\Message;
use App\Models\ChatRoom;

class MessagesController extends Controller
{
    public function getMessages(Request $request, $user_id, $room_id)
    {
        // does sender exist
        if (!User::find($user_id)) {
            return response()->json([
                'status' => 404,
                'message' => 'Sender not found'
            ], 404);
        }

        $chatRoom = ChatRoom::where('user_id', $user_id)
            ->where('room_id', $room_id)
            ->first();

        // does have permission to get messages
        if (!$chatRoom) {
            return response()->json([
                'status' => 403,
                'message' => 'You do not have the permission to read this channel'
            ], 403);
        }

        $messages = Message::where('room_id', $room_id)
            ->orderBy('time', 'asc')
            ->get();

        return response()->json([
            'status' => 200,
            'messages' => $messages
        ], 200);
    }

    public function sendMessage(Request $request, $user_id, $room_id)
    {
        // does sender exist
        if (!User::find($user_id)) {
            return response()->json([
                'status' => 404,
                'message' => 'Sender not found'
            ], 404);
        }

        $chatRoom = ChatRoom::where('user_id', $user_id)
            ->where('room_id', $room_id)
            ->first();

        // does have permission to write
        if (!$chatRoom) {
            return response()->json([
                'status' => 403,
                'message' => 'You do not have the permission to write to this channel'
            ], 403);
        }

        $message = new Message;
        $message->sender_id = $user_id;
        $message->room_id = $room_id;
        $message->message = $request->message;
        $message->is_new = $request->is_new;
        $message->time = Carbon::now();
        $message->save();

        return response()->json([
            'status' => 200,
            'message' => 'Message sent successfully',
        ], 200);
    }
}