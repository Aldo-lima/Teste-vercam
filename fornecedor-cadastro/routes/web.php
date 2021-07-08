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

Route::get( '/fornecedor', 'FornecedorController@inedx')->name('fornrcedor.index');
Route::get( '/fornecedor/create', 'FornecedorController@create')->name('fornrcedor.create');
Route::get( '/fornecedor_/fisico/creata', 'FornecedorController@createJuridico')->name('fornrcedor.index');

Route::get('/base', function () {
    return view('teste');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testefom', function () {
    return view('form_fornecedor_juridico');
});

Route::get('/fom', function () {
    return view('form_fomecedor_fisico');
});
