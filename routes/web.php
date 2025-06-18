<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.homepage.homepage');
});
Route::get('/faq', function () {
    return view('frontend.FaqPage.faq');
});
Route::get('/single-product', function () {
    return view('frontend.SingleProductPage.single-product');
});
Route::get('/contact', function () {
    return view('frontend.ContactUsPage.contact-us');
});
Route::get('/blog', function () {
    return view('frontend.BlogPage.blog');
});
Route::get('/project' , function () {
    return view('frontend.ProjectPage.project');
});

Route::get('/developer', function () {
    return view('frontend.DeveloperPage.developer');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
