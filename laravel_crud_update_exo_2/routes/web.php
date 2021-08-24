<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\homeController;


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

Route::get('/index', [indexController::class,'index'])->name('index');
/* CREATE*/
Route::get('/membres/creates', [homeController::class,'create'])->name('create');
Route::post('/membres', [homeController::class,'store'])->name('store');

/*READ */

Route::get('/', [homeController::class,'index'])->name('home');
Route::get('/membres/{id}/show', [homeController::class,'show'])->name('show');


/*UPDATE */
Route::get('/membres/{id}/edit', [homeController::class,'edit'])->name('edit');
Route::put('/membres/{id}/update', [homeController::class,'update'])->name('update');

/*DELETE*/

Route::delete('/membres/{id}/delete', [homeController::class,'destroy'])->name('delete');
Route::get('/membres', [homeController::class,'destroyAll'])->name('deleteAll');