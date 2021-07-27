<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\indexController;
use  App\Http\Controllers\membresController;
use  App\Http\Controllers\femmesController;
use  App\Http\Controllers\hommesController;
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

Route::get('/',[indexController::class, 'index'] );

Route::get('/membres',[membresController::class, 'index'] )->name('membres');
Route::get('/create',[membresController::class, 'create'] )->name('create');
Route::post('/store',[membresController::class, 'store'] )->name('store');

Route::post('/membres/{id}/delete', [membresController::class,'destroy'])->name('delete');
Route::get('/hommes',[hommesController::class, 'index'] )->name('hommes');
Route::get('/femmes',[femmesController::class, 'index'] )->name('femmes');