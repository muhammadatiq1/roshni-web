<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () { return view('pages.about'); })->name('about');
Route::get('/programs', function () { return view('pages.programs'); })->name('programs');
Route::get('/impact', function () { return view('pages.impact'); })->name('impact');
Route::get('/gallery', function () { return view('pages.gallery'); })->name('gallery');
Route::get('/contact', function () { return view('pages.contact'); })->name('contact');

Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    
    // CMS Routes
    Route::get('/content', [\App\Http\Controllers\Admin\SiteContentController::class, 'index'])->name('content.index');
    Route::get('/content/{page}/edit', [\App\Http\Controllers\Admin\SiteContentController::class, 'edit'])->name('content.edit');
    Route::put('/content/{page}', [\App\Http\Controllers\Admin\SiteContentController::class, 'update'])->name('content.update');

    // Inquiries Routes
    Route::resource('inquiries', \App\Http\Controllers\Admin\InquiryController::class)->only(['index', 'show', 'destroy']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
