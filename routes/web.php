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

Route::get('/', 'GuestController@home')->name('root')->middleware('guest');
Route::get('/article/{article}', 'GlobalController@show')->name('show');