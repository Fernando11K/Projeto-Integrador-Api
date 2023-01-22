<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controller\Controller;
use App\Models\Produto;
use Illuminate\Support\Facades\Validator;

class ProdutoController 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return Produto::all();
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
        $request->validate([

        'nome' => 'required',
        'categoria'  => 'required',
        'quantidade'  => 'required',
        'foto'  => 'required',
        'ativo'  => 'required',
        ]);
        return Produto::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idProduto)
    {
        return Produto::findOrFail($idProduto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idProduto)
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
    public function update(Request $produto)
    {
   
         $validator = Validator::make( $produto->all(), [
        'nome' => 'sometimes|required|nome',
        'categoria' => 'sometimes|required|categoria',
        'foto' => 'sometimes|required|foto',
        'ativo' => 'sometimes|required|ativo',
            ]);

        return Produto::findOrFail($produto->idProduto)->update($produto->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idProduto)
    {
        //
    }
}
