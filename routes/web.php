<?php

use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UrafController;
use Illuminate\Support\Facades\Route;

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
