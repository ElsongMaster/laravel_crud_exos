<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\animalsController;
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


/*CREATE */
Route::get('/animals/create',[animalsController::class,'create'] )->name('create');
Route::post('/store',[animalsController::class,'store'] )->name('store');


/*READ */
Route::get('/',[animalsController::class,'index'] )->name('home');
Route::get('/animals/{id}/show',[animalsController::class,'show'] )->name('show');

/*UPDATE */
Route::get('/animals/{id}/edit',[animalsController::class,'edit'] )->name('edit');
Route::put('/animals/{id}/update',[animalsController::class,'update'] )->name('update');


/*DELETE */
Route::delete('/animals/{id}/delete',[animalsController::class,'destroy'] )->name('delete');

