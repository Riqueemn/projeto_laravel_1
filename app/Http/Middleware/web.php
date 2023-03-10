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

Route::get('/', [EventController::class, 'index']);
Route::get('/event/create', [EventController::class, 'create']);

Route::get('/produtos', function () {
    return view('produtos');
});

Route::get('/contatos', function() {
    return view('contatos');
});
