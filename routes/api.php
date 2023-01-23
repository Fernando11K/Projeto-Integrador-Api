<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LoginController;


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
Route::middleware('auth:sanctum')->get('/usuario', function (Request $request) {
    return $request->usuario();
});

Route::post('/auth', [LoginController::class, 'autenticar']);

Route::get('/produtos', [ProdutoController::class, 'index']);
Route::get('/produto/{idProduto}', [ProdutoController::class, 'show']);
Route::post('/produto', [ProdutoController::class, 'store']);
Route::put('/produto', [ProdutoController::class, 'update']);

Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::get('/usuario/{idUsuario}', [UsuarioController::class, 'show']);
Route::post('/usuario', [UsuarioController::class, 'store']);
Route::post('/usuario/login', [UsuarioController::class, 'login']);
// Route::post('/auth', [UsuarioController::class, 'auth']);
Route::put('/usuario', [UsuarioController::class, 'update']);
