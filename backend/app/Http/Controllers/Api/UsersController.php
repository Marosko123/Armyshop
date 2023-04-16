<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function get()
    {
        $users = User::all();

        if ($users->count() <= 0) {
            return response()->json([
                'status' => 404,
                'message' => 'Users not found'
            ], 404);
        }

        return response()->json([
            'status' => 200,
            'users' => $users
        ], 200);
    }

    public function getById($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'status' => 404,
                'message' => 'User not found'
            ], 404);
        }

        return response()->json([
            'status' => 200,
            'user' => $user
        ], 200);
    }

    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'license_picture' => 'nullable|image|max:1024',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }

        $user = new User;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->age = $request->age;
        $user->address = $request->address;
        $user->is_license_valid = $request->is_license_valid;
        $user->telephone = $request->telephone;
        if ($request->hasFile('picture')) {
            $path = $request->file('picture')->store('public/id_pictures');
            $user->picture = $path;
        }
        $user->save();

        if (!$user) {
            return response()->json([
                'status' => 500,
                'message' => 'Something went wrong'
            ], 500);
        }

        return response()->json([
            'status' => 200,
            'message' => 'User created successfully'
        ], 200);
    }

    public function update(Request $request, int $id)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'nullable|email|unique:users,email',
            'password' => 'nullable|string|min:6',
            'first_name' => 'nullable|string|max:191',
            'last_name' => 'nullable|string|max:191',
            'age' => 'nullable|integer',
            'address' => 'nullable|string|max:191',
            'license_picture' => 'nullable|image|max:1024',
            'telephone' => [
                'nullable',
                'regex:/^+\d{1,3}\d{10}$/',
            ],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }

        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'status' => 404,
                'message' => 'User not found'
            ], 404);
        }

        $user->email = $request->email ?? $user->email;
        $user->first_name = $request->first_name ?? $user->first_name;
        $user->last_name = $request->last_name ?? $user->last_name;
        $user->age = $request->age ?? $user->age;
        $user->address = $request->address ?? $user->address;
        $user->license_picture = $request->license_picture ?? $user->license_picture;
        $user->telephone = $request->telephone ?? $user->telephone;

        if ($request->has('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return response()->json([
            'status' => 200,
            'message' => 'User updated successfully'
        ], 200);
    }

    public function delete($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'status' => 404,
                'message' => 'User not found'
            ], 404);
        }

        $user->delete();

        return response()->json([
            'status' => 200,
            'message' => 'User deleted successfully'
        ], 200);
    }
}