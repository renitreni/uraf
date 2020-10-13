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
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/form', [HomeController::class, 'urafForm'])->name('home.uraf-form');
Route::post('/form/send', [HomeController::class, 'urafFormSend'])->name('home.uraf-form.send');
Route::get('/followup/form', [HomeController::class, 'followUpForm'])->name('home.followup.form');
Route::post('/followup/send', [HomeController::class, 'followUpFormSend'])->name('home.followup.send');
