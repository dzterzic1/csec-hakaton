<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CovidDataController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/covid', [CovidDataController::class, 'index'])->name('covid.index');
Route::get('/covid/create', [CovidDataController::class, 'create'])->name('covid.create');
Route::post('/covid/store', [CovidDataController::class, 'store'])->name('covid.store');
Route::get('/covid/edit/{id}', [CovidDataController::class, 'edit'])->name('covid.edit');
Route::put('/covid/update/{id}', [CovidDataController::class, 'update'])->name('covid.update');

Route::put('/updateFinalResult/{id}', [CovidDataController::class, 'updateFinalResult'])->name('covid.updateFinalResult');
