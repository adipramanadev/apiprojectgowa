<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class LoginApiController extends Controller
{
    //
    public function login(Request  $request)
    {
        //validate incoming request with validator 
        $validator = Validator::make($request->all(), [
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        //auth attempt
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = User::where('email', $request->email)->first();
            $token = $user->createToken('bankSampah')->plainTextToken;
            return response()->json(
                [
                    'message' => 'Login Success',
                    'data' => $user,
                    'token' => $token
                ], 200);
        }else{
            return response()->json(['message' => 'Login Failed'], 401);
        }
    }

    //logout
    public function logout(Request $request)
    {
        if ($request->user()) {
            $request->user()->currentAccessToken()->delete();
            return response()->json(['message' => 'Logged out']);
        } else {
            return response()->json(['message' => 'User not authenticated'], 401);
        }
    }
}
