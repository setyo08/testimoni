<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminNewsController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\LandingNewsController;
use App\Models\News;
use Illuminate\Support\Facades\Route;

// App
Route::match(['get', 'post'], '/', [AppController::class, 'index'])->name('index');
Route::match(['get', 'post'], '/login', [AppController::class, 'login'])->name('login');
Route::match(['get', 'post'], '/register', [AppController::class, 'register'])->name('register');
Route::prefix('news')->name('news.')->group(function() {
    Route::get('', [LandingNewsController::class,'index'])->name('index');
    Route::get('{id}/news', [LandingNewsController::class,'show'])->name('show');
});
Route::post('news/store', [AdminNewsController::class,'store'])->name('admin.news.store');
Route::delete('news/delete/{id}', [AdminNewsController::class,'delete'])->name('admin.news.delete');

Route::get('testimonial/detail/{status}', [TestimonialController::class,'detail'])->name('testimonial.detail');

Route::get('/about', function() {
    return view('landing.about');
})->name("about");
// Admin
Route::match(['get', 'POST', 'DELETE'], '/admin', [AdminController::class, 'dashboard'])->name('admin');

// Auth
Route::match(['get', 'post'], '/admin/login', [AdminController::class, 'login'])->name('admin-login');
Route::match(['get', 'post'], '/admin/register', [AdminController::class, 'register'])->name('admin-register');
Route::get('logout', [AdminController::class, 'logout'])->name('logout');
