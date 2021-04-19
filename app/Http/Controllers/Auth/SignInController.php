<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class SignInController extends Controller
{


    public function __invoke(Request $request)
    {
        if(!$token = auth()->attempt($request->only('email', 'password'))){
            return response(null, 401);
        }

        $user = User::where('email', '=', $request->email)->first();
        $role = $user->role;
        $id = $user->id;

        return response()->json(['token' => $token, 'role' => $role, 'id' => $id]);
    }
}
