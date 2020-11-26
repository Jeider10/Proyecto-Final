<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('inicios', App\Http\Controllers\API\InicioAPIController::class);

Route::resource('config__empresas', App\Http\Controllers\API\Config_EmpresaAPIController::class);

Route::resource('clientes', App\Http\Controllers\API\ClientesAPIController::class);

Route::resource('proveedores', App\Http\Controllers\API\ProveedoresAPIController::class);

Route::resource('ciudads', App\Http\Controllers\API\CiudadAPIController::class);

Route::resource('articulos', App\Http\Controllers\API\ArticulosAPIController::class);

Route::resource('pedidos', App\Http\Controllers\API\PedidosAPIController::class);

Route::resource('facturas', App\Http\Controllers\API\FacturasAPIController::class);

Route::resource('detalle__facturas', App\Http\Controllers\API\Detalle_FacturaAPIController::class);

Route::resource('tipo__articulos', App\Http\Controllers\API\Tipo_ArticuloAPIController::class);

Route::resource('devolucions', App\Http\Controllers\API\DevolucionAPIController::class);