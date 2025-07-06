<?php

use PHPUnit\Event\Code\Test;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsAndPrController;
use App\Http\Controllers\TestimonyController;
use App\Http\Controllers\TeamMemberController;
use App\Http\Controllers\EventAndMediaController;
use App\Http\Controllers\FeaturedAndAwardController;
use App\Http\Controllers\PropertiesDetailsController;
use App\Http\Controllers\PropertiesCategoryController;
use App\Http\Controllers\DevelopmentPartnersController;
use App\Http\Controllers\PropertiesGalleryImagesController;

Route::get('/', [HomePageController::class, 'index'])->name('home');
Route::get('/developer', [DevelopmentPartnersController::class, 'index'])->name('development-partners');
Route::get('/developer-each/{slug}', [DevelopmentPartnersController::class, 'show'])->name('development-partners.show');
Route::get('/projects', [PropertiesDetailsController::class, 'index'])->name('projects');
Route::get('/projects-each/{slug}', [PropertiesDetailsController::class, 'show'])->name('projects.each');
Route::get('/blog', [BlogsController::class, 'index'])->name('blog.show');
Route::get('/blog-each/{slug}', [BlogsController::class, 'show'])->name('blog.each');
Route::get('/event-and-media', [EventAndMediaController::class, 'index'])->name('event-and-media');
Route::get('/news-and-pr', [NewsAndPrController::class, 'index'])->name('news');
Route::get('/news-each/{slug}', [NewsAndPrController::class, 'show'])->name('news.show');


Route::get('/awards-and-recognitions', [FeaturedAndAwardController::class, 'index'])->name('awards-and-recognitions');
Route::get('/verified-properties', [PropertiesDetailsController::class, 'verifiedProperties'])->name('verified-properties');
Route::get('/why-invest-with-us', [PropertiesDetailsController::class, 'whyInvestWithUs'])->name('why-invest-with-us');


Route::get('/career', [MasterController::class, 'career'])->name('career');
Route::get('/service', [MasterController::class, 'service'])->name('service');
Route::get('/about-us', [MasterController::class, 'aboutUs'])->name('about-us');
Route::get('/faq', [MasterController::class, 'faq'])->name('faq');
Route::get('/contact', [MasterController::class, 'contact'])->name('contact');
Route::get('/testimonials', [MasterController::class, 'testimonials'])->name('testimonials');
Route::get('/terms-and-conditions', [MasterController::class, 'termsAndConditions'])->name('terms-and-conditions');

Route::post('/leads/store', [QueryController::class, 'store'])->name('leads.store');




Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/development/create', [DevelopmentPartnersController::class, 'create'])->name('development-partners.create');
    Route::get('/developer-partner-list', [DevelopmentPartnersController::class, 'developerPartnerList'])->name('development-partners.list');
    Route::get('/developer/edit/{id}', [DevelopmentPartnersController::class, 'edit'])->name('development-partners.edit');
    Route::post('/development/store', [DevelopmentPartnersController::class, 'store'])->name('development-partners.store');
    Route::put('/development/update/{id}', [DevelopmentPartnersController::class, 'update'])->name('development-partners.update');
    Route::delete('/development/delete/{id}', [DevelopmentPartnersController::class, 'destroy'])->name('development-partners.delete');
    Route::patch('/development-partners/{id}/toggle-status', [DevelopmentPartnersController::class, 'toggleStatus'])->name('development-partners.toggle-status');

    Route::get('/projects/create', [PropertiesDetailsController::class, 'create'])->name('projects.create');
    Route::get('/projects/list', [PropertiesDetailsController::class, 'projectList'])->name('project.list');
    Route::get('/projects/edit/{id}', [PropertiesDetailsController::class, 'edit'])->name('projects.edit');
    Route::post('/projects/store', [PropertiesDetailsController::class, 'store'])->name('projects.store');
    Route::put('/projects/update/{id}', [PropertiesDetailsController::class, 'update'])->name('projects.update');
    Route::delete('/projects/delete/{id}', [PropertiesDetailsController::class, 'destroy'])->name('projects.destroy');
    Route::delete('/properties/gallery/{image}', [PropertiesGalleryImagesController::class, 'destroy'])->name('properties.gallery.destroy');
    Route::patch('/projects/{id}/toggle-status', [PropertiesDetailsController::class, 'toggleStatus'])->name('projects.toggle-status');

    Route::get('/categories/create', [PropertiesCategoryController::class, 'create'])->name('categories.create');
    Route::get('/categories/list', [PropertiesCategoryController::class, 'categoryList'])->name('categories.list');
    Route::get('/categories/edit/{id}', [PropertiesCategoryController::class, 'edit'])->name('categories.edit');
    Route::post('/categories/store', [PropertiesCategoryController::class, 'store'])->name('categories.store');
    Route::put('/categories/update/{id}', [PropertiesCategoryController::class, 'update'])->name('categories.update');
    Route::delete('/categories/delete/{id}', [PropertiesCategoryController::class, 'destroy'])->name('categories.delete');
    Route::patch('/categories/{id}/toggle-status', [PropertiesCategoryController::class, 'toggleStatus'])->name('categories.toggle-status');

    Route::get('/blog/create', [BlogsController::class, 'create'])->name('blog.create');
    Route::get('/blog/list', [BlogsController::class, 'blogList'])->name('blog.list');
    Route::get('/blog/edit/{id}', [BlogsController::class, 'edit'])->name('blog.edit');
    Route::post('/blog/store', [BlogsController::class, 'store'])->name('blog.store');
    Route::put('/blog/update/{id}', [BlogsController::class, 'update'])->name('blog.update');
    Route::delete('/blog/delete/{id}', [BlogsController::class, 'destroy'])->name('blog.delete');
    Route::patch('/blog/toggle-status/{id}', [BlogsController::class, 'toggleStatus'])->name('blog.toggle-status');


    Route::get('/event', [EventAndMediaController::class, 'create'])->name('event.create');
    Route::get('/event/list', [EventAndMediaController::class, 'eventList'])->name('event.list');
    Route::get('/event/edit/{id}', [EventAndMediaController::class, 'edit'])->name('event.edit');
    Route::post('/event/store', [EventAndMediaController::class, 'store'])->name('event.store');
    Route::put('/event/update/{id}', [EventAndMediaController::class, 'update'])->name('event.update');
    Route::delete('/event/delete/{id}', [EventAndMediaController::class, 'destroy'])->name('event.delete');
    Route::patch('/event/toggle-status/{id}', [EventAndMediaController::class, 'toggleStatus'])->name('event.toggle-status');
    Route::patch('/event/toggle-featured/{id}', [EventAndMediaController::class, 'toggleFeatured'])->name('event.toggle-featured');

    Route::get('/news/create', [NewsAndPrController::class, 'create'])->name('news.create');
    Route::get('/news/list', [NewsAndPrController::class, 'newsList'])->name('news.list');
    Route::get('/news/edit/{id}', [NewsAndPrController::class, 'edit'])->name('news.edit');
    Route::post('/news/store', [NewsAndPrController::class, 'store'])->name('news.store');
    Route::put('/news/update/{id}', [NewsAndPrController::class, 'update'])->name('news.update');
    Route::delete('/news/delete/{id}', [NewsAndPrController::class, 'destroy'])->name('news.delete');
    Route::patch('/news/toggle-status/{id}', [NewsAndPrController::class, 'toggleStatus'])->name('news.toggle-status');

    Route::get('/awards/create', [FeaturedAndAwardController::class, 'createAwards'])->name('award.create');
    Route::get('/awards/list', [FeaturedAndAwardController::class, 'awardsList'])->name('award.list');
    Route::get('/awards/edit/{id}', [FeaturedAndAwardController::class, 'editAwards'])->name('award.edit');
    Route::post('/awards/store', [FeaturedAndAwardController::class, 'store'])->name('award.store');
    Route::put('/awards/update/{id}', [FeaturedAndAwardController::class, 'update'])->name('award.update');
    Route::delete('/awards/delete/{id}', [FeaturedAndAwardController::class, 'destroy'])->name('award.delete');
    Route::patch('/awards/toggle-status/{id}', [FeaturedAndAwardController::class, 'toggleStatus'])->name('award.toggle-status');
    Route::patch('/awards/toggle-featured/{id}', [FeaturedAndAwardController::class, 'toggleFeatured'])->name('award.toggle-featured');

    Route::get('/team/create', [TeamMemberController::class, 'createTeam'])->name('team.create');
    Route::get('/team/list', [TeamMemberController::class, 'teamList'])->name('team.list');
    Route::get('/team/edit/{id}', [TeamMemberController::class, 'editTeam'])->name('team.edit');
    Route::post('/team/store', [TeamMemberController::class, 'storeTeam'])->name('team.store');
    Route::put('/team/update/{id}', [TeamMemberController::class, 'updateTeam'])->name('team.update');
    Route::delete('/team/delete/{id}', [TeamMemberController::class, 'destroyTeam'])->name('team.delete');
    Route::patch('/team/toggle-status/{id}', [TeamMemberController::class, 'toggleTeamStatus'])->name('team.toggle-status');

    Route::get('/testimony/create', [TestimonyController::class, 'createTestimony'])->name('testimony.create');
    Route::get('/testimony/list', [TestimonyController::class, 'testimonyList'])->name('testimony.list');
    Route::get('/testimony/edit/{id}', [TestimonyController::class, 'editTestimony'])->name('testimony.edit');
    Route::post('/testimony/store', [TestimonyController::class, 'storeTestimony'])->name('testimony.store');
    Route::put('/testimony/update/{id}', [TestimonyController::class, 'updateTestimony'])->name('testimony.update');
    Route::delete('/testimony/delete/{id}', [TestimonyController::class, 'destroyTestimony'])->name('testimony.delete');
    Route::patch('/testimony/toggle-status/{id}', [TestimonyController::class, 'toggleTestimonyStatus'])->name('testimony.toggle-status');

    Route::get('/leads', [QueryController::class, 'index'])->name('index.leads');
    Route::get('/leads/show/{id}', [QueryController::class, 'showLeadDetails'])->name('show.lead.details');
    Route::get('/leads/details/{id}', [QueryController::class, 'show'])->name('leads.details');

    Route::post('leads/{lead}/message',   [QueryController::class, 'storeMessage']);
    Route::post('leads/{lead}/toggle-read', [QueryController::class, 'toggleRead']);
});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
