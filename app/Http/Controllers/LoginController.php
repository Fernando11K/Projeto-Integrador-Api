<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Http\Controller\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LoginController 
{

    public function autenticar(Request  $usuario)
    {
        $usuario->validate( [
            'email' => 'required',
            'senha' => 'required'
        ]);
        $credenciais = ['email' => $usuario->email, 'password' => $usuario->senha ];
        
        if (Auth::attempt($credenciais)) {
            // $usuario->session()->regenerate();

            return response()->json(['sucess' => true], 200);
          
        }
     return response()->json(['type' => 'ERROR', 'error-msg' => 'Not found'], 404);
    }

}
