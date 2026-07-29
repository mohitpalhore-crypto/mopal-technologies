<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\DashboardController;





Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::view('/website-development', 'services.website-development');

Route::view('/ecommerce-development', 'services.ecommerce');

Route::view('/erp-software', 'services.erp-software');

Route::view('/custom-software', 'services.custom-software');

Route::view('/mobile-app-development', 'services.mobile-app-development');

Route::view('/digital-marketing', 'services.digital-marketing');

Route::view('/seo-services', 'services.seo-services');

Route::view('/ui-ux-design', 'services.ui-ux-design');

Route::view('/ai-solutions', 'services.ai-solutions');



Route::prefix('admin')->group(function () {

    Route::get('/contacts', [AdminContactController::class, 'index'])
        ->name('admin.contacts');

});

Route::prefix('admin')->group(function () {

    Route::get('/', [DashboardController::class,'index'])
        ->name('admin.dashboard');

});