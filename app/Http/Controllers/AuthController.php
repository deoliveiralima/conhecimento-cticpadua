<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
    $validatedData = $request->validate([
    
                    'cpf' => 'required|string|max:255|unique:users|numeric',
                    'password' => 'required|string|min:8',
    ]);

        $user = User::create([
                
                    'cpf' => $validatedData['cpf'],
                    'password' => Hash::make($validatedData['password']),
        ]);

    $token = $user->createToken('auth_token')->plainTextToken;

    return response()->json([
                'access_token' => $token,
                    'token_type' => 'Bearer',
    ]);
    }

    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('cpf', 'password'))) {
            return response()->json([
            'message' => 'Invalid login details'
                       ], 401);
                   }
            
            $user = User::where('cpf', $request['cpf'])->firstOrFail();
            
            $token = $user->createToken('auth_token')->plainTextToken;
            
            return response()->json([
                       'token' => $token,
                       'nome' => $user->name,
                       
            ]);
    }

    //
}
