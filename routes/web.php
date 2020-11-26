<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return view('Principal.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');

Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');

Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');

Route::post('generator_builder/generate-from-file', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile')->name('io_generator_builder_generate_from_file');

Route::resource('home', App\Http\Controllers\HomeController::class);

Route::resource('configEmpresas', App\Http\Controllers\Config_EmpresaController::class);

Route::resource('clientes', App\Http\Controllers\ClientesController::class);

Route::resource('proveedores', App\Http\Controllers\ProveedoresController::class);

Route::resource('ciudads', App\Http\Controllers\CiudadController::class);

Route::resource('articulos', App\Http\Controllers\ArticulosController::class);

Route::resource('pedidos', App\Http\Controllers\PedidosController::class);

Route::resource('facturas', App\Http\Controllers\FacturasController::class);

Route::resource('detalleFacturas', App\Http\Controllers\Detalle_FacturaController::class);

Route::resource('tipoArticulos', App\Http\Controllers\Tipo_ArticuloController::class);

Route::resource('devolucions', App\Http\Controllers\DevolucionController::class);