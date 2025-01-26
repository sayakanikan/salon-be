<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

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

    public function register(Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required',
            ]);

            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors(), 422);
            }

            $input = $request->all();
            $input['password_encrypt'] = Crypt::encrypt($input["password"]);
            $input['password'] = bcrypt($input['password']);
            $user = User::create($input);

            return $this->sendResponse($user, 'User register successfully.');
        } catch (Exception $e) {
            return $this->sendError('Internal Error.', ['error' => $e->getMessage()]);
        }
    }

    public function logout(Request $request) {
        try {
            $request->user()->tokens()->delete();
            $this->sendResponse(null, 'successfully logged out');
        } catch (\Exception $e) {
            response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
