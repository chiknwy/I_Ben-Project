<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => ['required', 'string', 'min:8']
        ]);
        
        $user = User::where('email', $request->email)->first();
        if (!$user || ! Hash::check($request->password, $user->password)){
            return response([
                'success' => false,
                'message' => ['These credentials do not match our records.']
            ], 404);

        }
        $user->tokens()->delete();
        $token=$user->createToken($request->email)->plainTextToken;
        return response()->json([
            'success' => true,
            'message' => 'Login Success',
            'data' => [
                'user' => $user,
                'token' => $token
            ]
        ], 200);

    }    
}
