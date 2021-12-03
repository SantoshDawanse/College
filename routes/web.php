<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
})->name('frontend.index');
Route::get('/introduction', function () {
    return view('frontend.pages.introduction');
})->name('frontend.pages.introduction');

Route::get('/chairman', function () {
    return view('frontend.pages.chairman');
})->name('frontend.pages.chairman');

Route::get('/principal', function () {
    return view('frontend.pages.principal');
})->name('frontend.pages.principal');

Route::get('/od', function () {
    return view('frontend.pages.od');
})->name('frontend.pages.od');

Route::get('/bhm', function () {
    return view('frontend.pages.bhm');
})->name('frontend.pages.bhm');

Route::get('/bca', function () {
    return view('frontend.pages.bca');
})->name('frontend.pages.bca');

Route::get('/bsw', function () {
    return view('frontend.pages.bsw');
})->name('frontend.pages.bsw');

Route::get('/bbs', function () {
    return view('frontend.pages.bbs');
})->name('frontend.pages.bbs');

Route::get('/science', function () {
    return view('frontend.pages.science');
})->name('frontend.pages.science');

Route::get('/management', function () {
    return view('frontend.pages.management');
})->name('frontend.pages.management');

Route::get('/humanities', function () {
    return view('frontend.pages.humanities');
})->name('frontend.pages.humanities');

Route::get('/team', function () {
    return view('frontend.pages.team');
})->name('frontend.pages.team');

Route::get('/faq', function () {
    return view('frontend.pages.faq');
})->name('frontend.pages.faq');

Route::get('/contact', function () {
    return view('frontend.pages.contact');
})->name('frontend.pages.contact');

Route::get('/login', function () {
    return view('admin.login');
})->name('admin.login');

Route::get('/lifeatnic', function () {
    return view('frontend.pages.lifeatnic');
})->name('frontend.pages.lifeatnic');
