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
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Laravel\Fortify\Fortify;


Fortify::loginView(function () {
    return redirect()->route('home');
});

Route::get('/permission', function () {
    return view('auth.login');
})->name('permission');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/form', [HomeController::class, 'urafForm'])->name('home.uraf-form');
Route::post('/form/send', [HomeController::class, 'urafFormSend'])->name('home.uraf-form.send');
Route::get('/followup/form', [HomeController::class, 'followUpForm'])->name('home.followup.form');
Route::post('/followup/send', [HomeController::class, 'followUpFormSend'])->name('home.followup.send');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/dashboard/table', [DashboardController::class, 'table'])->name('dashboard.table');
    Route::get('/dashboard/export', [DashboardController::class, 'export'])->name('dashboard.export');
    Route::get('/dashboard/track/{lat}/{lang}', [DashboardController::class, 'track'])->name('dashboard.track');
    Route::post('/dashboard/delete', [DashboardController::class, 'destroy'])->name('dashboard.destroy');
    
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::post('/users/table', [UserController::class, 'table'])->name('users.table');
    Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
    Route::post('/users/delete', [UserController::class, 'destroy'])->name('users.delete');
});
