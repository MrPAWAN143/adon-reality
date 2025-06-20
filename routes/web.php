<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Pages.homepage');
});

Route::get('/contact-us', function () {
    return view('Pages.contact-us');
});

Route::get('/faq', function () {
    return view('Pages.faq');
});


Route::get('/blog', function () {
    return view('Pages.blog');
});

Route::get('project-page', function () {
    return view('Pages.project-page');
});

Route::get('developer', function () {
    return view('Pages.developer-partner-page');
});



Route::get('/dashboard', function () {
    return view('Dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
