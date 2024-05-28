<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FooterController;

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
});


Route::get('/heroes', [HeroController::class, 'index'])->name('heroes.index');
Route::get('/heroes/create', [HeroController::class, 'create'])->name('heroes.create');
Route::post('/heroes', [HeroController::class, 'store'])->name('heroes.store');

Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
Route::post('/services', [ServiceController::class, 'store'])->name('services.store');

Route::get('/footers', [FooterController::class, 'index'])->name('footers.index');
Route::get('/footers/create', [FooterController::class, 'create'])->name('footers.create');
Route::post('/footers', [FooterController::class, 'store'])->name('footers.store');