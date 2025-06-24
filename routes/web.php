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

Route::get('event-and-media' , function (){
    return view('Pages.event-and-media');
});
Route::get('developer-each', function () {
    return view('Pages.projects-each-brand');
});

Route::get('/awards', function(){
    return view('Pages.awards-and-recognitions');
});

Route::get('/verified-properties', function () {
    return view('Pages.verified-properties');
});
Route::get('/why-invest-with-us', function () {
    return view('Pages.why-invest-with-us');
});

Route::get('/service', function () {
    return view('Pages.service-page');
});

Route::get('/career', function () {
    return view('Pages.career-page');
});
Route::get('/about-us', function () {
    return view('Pages.about-us');
});
Route::get('/news', function () {
    return view('Pages.news-and-pr-page');
});
Route::get('/single-blog', function () {
    return view('Pages.single-blog');
});
Route::get('/terms-and-conditions', function () {
    return view('Pages.terms-and-conditions');
});
Route::get('/testimonials', function () {
    return view('Pages.testimonials');
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
