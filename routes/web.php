<?php

use App\Http\Controllers\shop\ArticleController;
use App\Http\Controllers\shop\VoitureController;
use App\Http\Controllers\shop\QuisommenousController;
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
    return view('acceuil');
});

Route::get('/article', function () {
    return view('article');
});
Route::get('/quisommenous', function () {
    return view('quisommenous');
});

Route::get('/devis', function () {
    return view('devis');
});

Route::get('/location', function () {
    return view('location');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/gestion', function () {
    return view('gestion');
});

Route::get('/achatventelocation', function () {
    return view('achatventelocation');
});

Route::get('/categorieA', function () {
    return view('categorieA');
});

Route::get('/categorieI', function () {
    return view('categorieI');
});

Route::get('/categorieE', function () {
    return view('categorieE');
});

Route::get('/voiture', function () {
    return view('voiture');
});

Route::get('/rendezvous', function () {
    return view('rendezvous');
});

Route::get('/voir', function () {
    return view('voir');
});








