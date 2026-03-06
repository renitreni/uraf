<?php

use App\Http\Controllers\Api\Admin\ContactMessageController as AdminContactMessageController;
use App\Http\Controllers\Api\Admin\UrafRequestController as AdminUrafRequestController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UrafController;
use Illuminate\Support\Facades\Route;

// Admin API (must be in web routes so session is used; same session as login)
Route::prefix('api/admin')->middleware('auth')->group(function () {
    Route::get('contact-messages', [AdminContactMessageController::class, 'index']);
    Route::get('contact-messages/{id}', [AdminContactMessageController::class, 'show']);
    Route::get('uraf-requests', [AdminUrafRequestController::class, 'index']);
    Route::get('uraf-requests/{id}', [AdminUrafRequestController::class, 'show']);
});

// Login (guest only)
Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
});
Route::post('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// Theme / public pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/service', [PageController::class, 'service'])->name('service');
Route::get('/donation', [PageController::class, 'donation'])->name('donation');
Route::get('/event', [PageController::class, 'event'])->name('event');
Route::get('/feature', [PageController::class, 'feature'])->name('feature');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/testimonial', [PageController::class, 'testimonial'])->name('testimonial');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactMessageController::class, 'store'])->name('contact.store');
Route::get('/404', [PageController::class, 'notFound'])->name('page.404');

// URAF form (moved to /uraf so theme home can use /)
Route::get('/uraf', [UrafController::class, 'index'])->name('uraf.form');
Route::post('/uraf', [UrafController::class, 'store'])->name('uraf.store');
Route::get('/success/{id}', [UrafController::class, 'success'])->name('uraf.success');

// Admin SPA (React) - must be last so other routes take precedence
Route::get('/admin/{path?}', function () {
    return view('admin');
})->where('path', '.*')->name('admin')->middleware('auth');
