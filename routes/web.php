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

Route::get('portfolio', 'PagesController@getPortfolio')->name('portfolio');

Route::get('cv', 'PagesController@getCV')->name('cv');

Route::get('/','PagesController@getIndex')->name('home');

Route::get('/portfolio/portfolio-website-using-laravel7', function () {
    return view('project_posts/project_1');
})->name('project_1');

Route::get('/portfolio/cross-sell-prediction-model', function () {
    return view('project_posts/project_2');
})->name('project_2');

Route::get('/portfolio/examination-timetabling-problem', function () {
    return view('project_posts/project_3');
})->name('project_3');

Route::get('/portfolio/demion-elearning-template', function () {
    return view('project_posts/project_4');
})->name('project_4');


Route::get('/portfolio/cross-sell-prediction-model/code', function () {
    return view('jupyter_code/red-line-preliminaries');
})->name('project_2_code');



