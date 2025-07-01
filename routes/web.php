<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DevelopmentPartnersController;
use App\Http\Controllers\PropertiesDetailsController;
use App\Http\Controllers\PropertiesCategoryController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\EventAndMediaController;
use App\Http\Controllers\NewsAndPrController;
use App\Http\Controllers\FeaturedAndAwardController;
use App\Http\Controllers\MasterController;


Route::get('/', [HomePageController::class, 'index'])->name('home');
Route::get('/developer', [DevelopmentPartnersController::class, 'index'])->name('development-partners');
Route::get('/developer-each/{id}', [DevelopmentPartnersController::class, 'show'])->name('development-partners.show');
Route::get('/projects', [PropertiesDetailsController::class, 'index'])->name('projects');
Route::get('/projects-each/{id}', [PropertiesDetailsController::class, 'show'])->name('projects.each');
Route::get('/blog', [BlogsController::class, 'index'])->name('blog');
Route::get('/blog-each/{id}', [BlogsController::class, 'show'])->name('blog.each');
Route::get('/event-and-media', [EventAndMediaController::class, 'index'])->name('event-and-media');
Route::get('/news-and-pr', [NewsAndPrController::class, 'index'])->name('news-and-pr');

Route::get('/awards-and-recognitions', [FeaturedAndAwardController::class, 'index'])->name('awards-and-recognitions');
Route::get('/verified-properties', [PropertiesDetailsController::class, 'verifiedProperties'])->name('verified-properties');
Route::get('/why-invest-with-us', [PropertiesDetailsController::class, 'whyInvestWithUs'])->name('why-invest-with-us');


Route::get('/career', [MasterController::class, 'career'])->name('career');
Route::get('/service', [MasterController::class, 'service'])->name('service');
Route::get('/about-us', [MasterController::class, 'aboutUs'])->name('about-us');
Route::get('/faq', [MasterController::class, 'faq'])->name('faq');
Route::get('/contact' , [MasterController::class, 'contact'])->name('contact');
Route::get('/testimonials', [MasterController::class, 'testimonials'])->name('testimonials');
Route::get('/terms-and-conditions', [MasterController::class, 'termsAndConditions'])->name('terms-and-conditions');








Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/development/create', [DevelopmentPartnersController::class, 'create'])->name('development-partners.create');
    Route::get('/developer-partner-list', [DevelopmentPartnersController::class, 'developerPartnerList'])->name('development-partners.list');
    Route::get('/developer/edit', [DevelopmentPartnersController::class, 'edit'])->name('development-partners.edit');
    Route::post('/development/store', [DevelopmentPartnersController::class, 'store'])->name('development-partners.store');

    Route::get('/projects/create', [PropertiesDetailsController::class, 'create'])->name('projects.create');
    Route::get('/projects/list', [PropertiesDetailsController::class, 'projectList'])->name('project.list');
    Route::get('/projects/edit', [PropertiesDetailsController::class, 'edit'])->name('projects.edit');

    Route::get('/categories/create', [PropertiesCategoryController::class, 'create'])->name('categories.create');
    Route::get('/categories/list', [PropertiesCategoryController::class, 'categoryList'])->name('categories.list');
    Route::get('/categories/edit', [PropertiesCategoryController::class, 'edit'])->name('categories.edit');

    Route::get('/blog/create', [BlogsController::class, 'create'])->name('blog.create');
    Route::get('/blog/list', [BlogsController::class, 'blogList'])->name('blog.list');
    Route::get('/blog/edit', [BlogsController::class, 'edit'])->name('blog.edit');

    Route::get('/event', [EventAndMediaController::class, 'create'])->name('event.create');
    Route::get('/event/list', [EventAndMediaController::class, 'eventList'])->name('event.list');
    Route::get('/event/edit', [EventAndMediaController::class, 'edit'])->name('event.edit');

    Route::get('/news/create', [NewsAndPrController::class, 'create'])->name('news.create');
    Route::get('/news/list', [NewsAndPrController::class, 'newsList'])->name('news.list');
    Route::get('/news/edit', [NewsAndPrController::class, 'edit'])->name('news.edit');

    Route::get('/awards/create', [FeaturedAndAwardController::class, 'createAwards'])->name('award.create');
    Route::get('/awards/list', [FeaturedAndAwardController::class, 'awardsList'])->name('award.list');
    Route::get('/awards/edit', [FeaturedAndAwardController::class, 'editAwards'])->name('award.edit');
});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
