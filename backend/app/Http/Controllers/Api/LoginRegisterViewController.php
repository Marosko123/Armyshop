<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginRegisterViewController extends Controller
{
    public function get(Request $request)
    {
        return view('loginAndRegisterMenu');
    }
}