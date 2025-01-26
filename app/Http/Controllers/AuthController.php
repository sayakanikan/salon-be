<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request) {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $user['token'] = $user->createToken('Salon')->plainTextToken;

            return $this->sendResponse($user, 'User login successfully.');
        } else {
            return $this->sendError('Unauthorised.', ['error' => 'Unauthorised']);
        }
    }

    public function logout(Request $request)
    {
        try {
            $request->user()->tokens()->delete();
            $this->sendResponse(null, 'successfully logged out');
        } catch (\Exception $e) {
            response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
