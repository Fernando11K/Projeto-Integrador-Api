<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// var_dump($_SERVER);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/produtos', [ProdutoController::class, 'index']);
Route::post('/produto', [ProdutoController::class, 'store']);
Route::get('/produto/{idProduto}', [ProdutoController::class, 'show']);

Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::post('/usuario', [UsuarioController::class, 'store']);
Route::get('/usuario/{idUsuario}', [UsuarioController::class, 'show']);
Route::put('/usuario', [UsuarioController::class, 'update']);
