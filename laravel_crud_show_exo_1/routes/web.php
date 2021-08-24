<?php
use App\Http\Controllers\homeController;
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

Route::get('/', [homeController::class,'index'])->name('home');

Route::get('/ingredients/create', [homeController::class,'create'])->name('create');

Route::post('/ingredients', [homeController::class,'store'])->name('store');

Route::get('/ingredients/{id}/show', [homeController::class,'show'])->name('show');


Route::delete('/ingredients/{id}/delete', [homeController::class,'destroy'])->name('delete');