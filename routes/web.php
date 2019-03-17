<?php

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
//
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'PageController@index');

Route::get('/article', 'PageController@articleList');
Route::get('/article/1', 'PageController@articleSingle');
Route::get('/article/tag/asd', 'PageController@articleTag');

Route::get('/research', 'PageController@researchList');

Route::get('/profile', 'PageController@profile');


Route::get('/gallery', 'PageController@gallery');


Route::get('/construct', 'PageController@underConstruction');

Route::get('/faq', 'PageController@faq');





Route::get('/contact', 'ContactController@index');

Route::get('/about', 'PageController@about');

Route::get('/board-of-directors', 'PageController@bod');
