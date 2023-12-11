<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home.index');
    Route::get('works', 'works')->name('works.index');
    Route::get('works/{slug}', 'works_show')->name('works.show');
    Route::get('services', 'services')->name('services.index');
    Route::get('services/{id}', 'services_show')->name('services.show');
    Route::get('about-us', 'about')->name('about.index');
    Route::get('plans', 'plans')->name('plans.index');
});

Route::controller(ContactController::class)->group(function () {
    Route::get('contact-us', 'index')->name('contact.index');
    Route::post('/send', 'send')->name('contact.send');
});