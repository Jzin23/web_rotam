<?php

namespace App\Http\Controllers;

use App\Models\User;
use illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function index ()
    {
        return view('cadastro');
    }

    public function register(Request $request)
    {
        $request->validate
            ([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed'
            ]);

        $user = User::create
        ([
            'name' => $request->name, 
            'email' => $request->email, 
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);

        return redirect()->route('conf.home');
    }
}
