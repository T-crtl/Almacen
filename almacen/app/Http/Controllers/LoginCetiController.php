<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginCetiController extends Controller
{
    //
    public function login(Request $request)
    {
        $user = User::where($request->email)->first();
        Auth::login($user);

    }

}
