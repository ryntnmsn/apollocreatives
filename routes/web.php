<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WorkController;
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

Route::controller(WorkController::class)->group(function () {
    Route::get('films', 'filmWorks')->name('filmWorks');
});

Route::get('member/arjen_manlapig', function() {
    return view('members/arjen_manlapig');
});

Route::get('member/mae_estrada', function() {
    return view('members/mae_estrada');
});

Route::get('member/elisha_julian', function() {
    return view('members/elisha_julian');
});

Route::get('member/thate_maristela', function() {
    return view('members/thate_maristela');
});

Route::get('member/ryan_tinamisan', function() {
    return view('members/ryan_tinamisan');
});

Route::get('member/vince_ong', function() {
    return view('members/vince_ong');
});