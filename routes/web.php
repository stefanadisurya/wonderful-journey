<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::group(['middleware' => ['auth', 'roles:Admin,User']], function () {
    Route::get('/home', 'GlobalController@home')->name('home');
    Route::get('/profile/{user}', 'GlobalController@profile')->name('profile');
    Route::post('/profile/{user}', 'GlobalController@update');
});

Route::group(['middleware' => ['auth', 'roles:Admin']], function() {
    Route::get('/admin/article/{article}', 'AdminController@show')->name('showadmin');
    Route::delete('/admin/article/{article}', 'AdminController@destroyArticle')->name('deletearticle');
    Route::get('/admin/admin', 'AdminController@admin')->name('admin');
    Route::get('/admin/user', 'AdminController@user')->name('user');
    Route::delete('/admin/user/{user}', 'AdminController@destroyUser')->name('deleteuser');
    Route::delete('/article/{article}', 'AdminController@destroyArticleFromHome')->name('deletearticlehome');
    Route::delete('/admin/profile/{user}', 'AdminController@destroyUser2')->name('deleteuser2');
});

Route::group(['middleware' => ['auth', 'roles:User']], function() {
    Route::get('/user/blog', 'UserController@blog')->name('blog');
    Route::delete('/user/blog/{article}', 'UserController@destroyArticle')->name('deleteuserarticle');
    Route::get('/user/{user}/blog/{article}', 'UserController@details')->name('showuserarticle');
    Route::delete('/user/{user}/blog/{article}', 'UserController@destroyArticle2')->name('deleteuserarticle2');
    Route::get('/user/create', 'UserController@create')->name('create');
    Route::post('/user/create', 'UserController@store');
    Route::get('/user/article/{article}', 'UserController@show')->name('showdetails');
    Route::delete('/user/article/{article}', 'UserController@destroyArticle3')->name('deleteuserarticle3');
});

Route::get('/', 'GuestController@home')->name('root')->middleware('guest');
Route::get('/article/{article}', 'GuestController@show')->name('show')->middleware('guest');

Route::get('/beach', 'GlobalController@beach')->name('beach');
Route::get('/mountain', 'GlobalController@mountain')->name('mountain');
Route::get('/about', 'GlobalController@about')->name('about');