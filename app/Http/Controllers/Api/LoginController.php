<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){

        $login = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);
        if(! Auth::attempt($login)){
           return response([
               'message' => 'Invalid user credentials'
           ]);
        }
        $accessToken = Auth::user()->createToken('authToken')->accessToken;
        return response([
            'message' => ' valid user credentials ',
            'access_token' => $accessToken
        ]);

    }
}
