<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function index() {
        return view("admin.login");
    }

    public function login(LoginRequest $request) {
        
        $data = $request->validated();

        $credentials = $request->only('username', 'password');
        
    }
}
