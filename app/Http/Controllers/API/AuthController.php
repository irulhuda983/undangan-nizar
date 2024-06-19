<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    
    public function issueToken(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('username', $request->username)->first();

        if(!$user) {
            return response()->json(['message' => 'Username dan sandi salah'], 403);
        }

        if(!Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Username dan sandi salah'], 403);
        }

        $token = $user->createToken($request->username);
        return response()->json(['token' => $token->plainTextToken, 'userInfo' => new UserResource($user)]);
    }

    public function getMe(Request $request)
    {
        $user = $request->user();

        return new UserResource($user);
    }

    public function revokeToken(Request $request)
    {
        $user = $request->user();

        if (!$user->currentAccessToken()->delete())
            return response()->json(['error' => 'Terjadi kesalahan'], 500);

        return response()->json(['success' => true]);
    }
}
