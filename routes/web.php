<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController\HomeController;
use App\Http\Controllers\FrontendController\PageController;

/**
 *    Frontend
 */

// All Index Pages Routing
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'indexOne')->name('home'); // index
    Route::get('index2', 'indexTwo')->name('indexTwo');
    Route::get('index3', 'indexThree')->name('indexThree');

});

// Other Pages Routing
Route::controller(PageController::class)->group(function () {
    Route::get('about', 'about')->name('about');
    Route::get('architecture', 'architecture')->name('architecture');
    Route::get('blog', 'blog')->name('blog');
    Route::get('blog-details', 'blogDetails')->name('blogDetails');
    Route::get('blog-sidebar', 'blogSidebar')->name('blogSidebar');
    Route::get('building-renovation', 'buildingRenovation')->name('buildingRenovation');
    Route::get('cart', 'cart')->name('cart');
    Route::get('checkout', 'checkout')->name('checkout');
    Route::get('construction-site', 'constructionSite')->name('constructionSite');
    Route::get('contact', 'contact')->name('contact');
    Route::get('error', 'errorPage')->name('errorPage');
    Route::get('faq', 'faq')->name('faq');
    Route::get('interior-design', 'interiorDesign')->name('interiorDesign');
    Route::get('pricing', 'pricing')->name('pricing');
    Route::get('project-details', 'projectDetails')->name('projectDetails');
    Route::get('projects', 'projects')->name('projects');
    Route::get('security-system', 'securitySystem')->name('securitySystem');
    Route::get('services', 'services')->name('services');
    Route::get('shop', 'shop')->name('shop');
    Route::get('shop-details', 'shopDetails')->name('shopDetails');
    Route::get('team', 'team')->name('team');
    Route::get('team-details', 'teamDetails')->name('teamDetails');
    Route::get('testimonials', 'testimonials')->name('testimonials');
    Route::get('uiux-design', 'uiuxDesign')->name('uiuxDesign');
    
});
