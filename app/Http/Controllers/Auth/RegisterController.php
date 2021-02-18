<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class RegisterController extends Controller
{
    public function __invoke(Request $request)
    {
        $user = new User();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;

        if($user->save()){
            return response()->json("success register", 200);
        }

        return response()->json("failed register", 400);

    }
}
