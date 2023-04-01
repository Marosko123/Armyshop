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
            'password' => 'nullable',
            'first_name' => 'nullable|string|max:191',
            'last_name' => 'nullable|string|max:191',
            'age' => 'nullable|integer',
            'address' => 'nullable|string|max:191',
            'license_picture' => 'nullable|image|max:1024',
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

        $user->update([
            'email' => $request->email ?? $user->email,
            'password' => bcrypt($request->password) ?? $user->password,
            'first_name' => $request->first_name ?? $user->first_name,
            'last_name' => $request->last_name ?? $user->last_name,
            'age' => $request->age ?? $user->age,
            'address' => $request->address ?? $user->address,
            'license_picture' => $request->license_picture ?? $user->license_picture
        ]);

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