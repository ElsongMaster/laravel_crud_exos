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

Route::get('/',[homeController::class,'index'])->name('home');


Route::get('/index',[indexController::class,'index'])->name('index');


Route::get('/create',[homeController::class,'create'])->name('create');

Route::post('/store',[homeController::class,'store'])->name('store');


Route::post('/voitures/{id}/delete',[homeController::class,'destroy'])->name('delete');