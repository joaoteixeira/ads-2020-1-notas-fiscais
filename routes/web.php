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

   

    return view('welcome');
})->middleware('auth');

Route::get('/sobre', function () {
    return view('sobre');
});


Route::resource('/beneficiario', 'BeneficiarioController');
Route::get('/beneficiario/destroy/{id}','BeneficiarioController@destroyConfirm')->name('beneficiario.destroy-confirm');


Route::resource('/fornecedor', 'FornecedorController');
Route::get('/fornecedor/destroy/{id}','FornecedorController@destroyConfirm')->name('fornecedor.destroy-confirm');

Route::resource('/lancamento', 'LancamentoNfController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
