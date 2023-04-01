<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginRegisterController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }

        // Attempt to authenticate the user
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication successful
            $user = Auth::user();
            $token = $user->createToken('access_token')->accessToken;
            return response()->json([
                'status' => 200,
                'token' => $token,
                'user' => $user,
            ], 200);
        } else {
            // Authentication failed
            return response()->json([
                'status' => 401,
                'message' => 'Invalid credentials',
            ], 401);
        }
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'license_picture' => 'nullable|image|max:1024',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }

        // Create new user record
        $user = new User;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->is_license_valid = false;
        if ($request->hasFile('picture')) {
            $path = $request->file('picture')->store('public/id_pictures');
            $user->picture = $path;
        }
        $user->save();
        $user = User::where('id', $user->id)->first();

        // Authenticate the user and generate an access token
        $token = $user->createToken('access_token')->accessToken;

        // Return response
        return response()->json([
            'status' => 200,
            'token' => $token,
            'user' => $user,
        ], 200);
    }
}