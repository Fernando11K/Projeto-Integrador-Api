<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controller\Controller;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UsuarioController 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return Usuario::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $usuario = $request;
         $usuario->validate([

        'nome' => 'required',
        'sobrenome' => 'required',
        'senha' => 'required',
        'email' => 'required',
        'ativo' => 'required',
        'senha' => 'required',
        'trocar_senha' => 'required',

        ]);
         $usuario['senha'] = Hash::make( $usuario->senha);
        return Usuario::create( $usuario->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idUsuario)
    {
        return Produto::findOrFail($idUsuario);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idUsuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         $usuario = $request;

         $validator = Validator::make( $usuario->all(), [
        'nome' => 'sometimes|required|nome',
        'sobrenome' => 'sometimes|required|sobrenome',
        'senha' => 'sometimes|required|senha',
        'email' => 'sometimes|required|email',
        'ativo' => 'sometimes|required|ativo',
        'senha' => 'sometimes|required|senha',
        'trocar_senha' => 'sometimes|required|trocar_senha',
            ]);
        //  $usuario->validate([

        // 'nome' => 'sometimes|required|nome',
        // 'sobrenome' => 'sometimes|required|sobrenome',
        // 'senha' => 'sometimes|required|senha',
        // 'email' => 'sometimes|required|email',
        // 'ativo' => 'sometimes|required|ativo',
        // 'senha' => 'sometimes|required|senha',
        // 'trocar_senha' => 'sometimes|required|trocar_senha',

        // ]);

        if ($usuario['senha'] != null) {
           $usuario['senha'] = Hash::make( $usuario->senha);
        }
         
        return Usuario::findOrFail($usuario->idUsuario)->update($usuario->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
