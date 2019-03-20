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

Route::resource('/articles', 'ArticleController');



Route::get('/article/{id}', 'PageController@showarticle')->name('article.show');
Route::get('/articles/{category}', 'PageController@showcategory')->name('article.category');


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
	Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
	Route::post('/login', 'AdminAuth\LoginController@login');
	Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

	// Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
	// Route::post('/register', 'AdminAuth\RegisterController@register');

	Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
	Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
	Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
	Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');

  	//article routes
    Route::get('/article', 'PageController@article')->name('article');
	Route::resource('/articles', 'ArticleController');
});
?>
