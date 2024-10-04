<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.admin');
    }

    public function logar(Request $request)
    {

        $senha = $request->input('senha');

        $senhaCriptografada = bcrypt($senha);

        echo "Senha: $senha------------";
        echo "Criptografada: $senhaCriptografada ------------";

    
    }
}
