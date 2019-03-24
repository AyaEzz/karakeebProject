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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/login/{social}','Auth\LoginController@socialLogin')->where('social','twitter|facebook|linkedin|google|github|bitbucket');

Route::get('/login/{social}/callback','Auth\LoginController@handleProviderCallback')->where('social','twitter|facebook|linkedin|google|github|bitbucket');

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@updatePhoto')->name('photo');
Route::resource('advertisment','advertismentController');
Route::resource('category','categoryController');

Route::get('/create', 'advertismentController@create');

Route::get('/users/logout','Auth\LoginController@userlogout')->name('user.logout');






Route::prefix('admin')->group(function (){

    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::delete('/destroyUser/{id}', 'AdminController@destroy')->name('destroyUser');
    Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');


});

Route::group(['middleware' => ['auth']], function () {

    // general auth routing



    // user routing
    Route::group(['prefix' => 'user'], function() {

        Route::group(['prefix' => 'chat/threads'], function() {
            // user messaging
            Route::get('/', 'MessagesThreadController@index')->name('user.chat.threads.index');
            Route::post('/create', 'MessagesThreadController@create')->name('user.chat.threads.create');

            Route::get('/@{user}/messages', 'MessagesController@index')->name('user.chat.threads.thread.messages.index');
            Route::get('/@{user}/messages/fetch', 'MessagesController@fetchMessages')->name('user.chat.threads.thread.messages.fetch');
            Route::post('/@{user}/messages', 'MessagesController@create')->name('user.chat.threads.thread.messages.create');
        });

        Route::group(['prefix' => 'profile'], function() {
            // user profile
            Route::get('/@{user}/settings', 'ProfileSettingsController@index')->name('user.profile.settings.index');
            Route::post('/@{user}/settings/update/', 'ProfileSettingsController@update')->name('user.profile.settings.update');
        });

    });

    // admin routing


    // moderator dashboard, also accessible by admin (auth.elevated)

});

// public forum routing


Route::get('/help', function () {
    return view('help');
});


Route::get('/feedback', function () {
    return view('feedback');
});
Route::get('/terms', function () {
    return view('terms');
});
Route::get('/privacy', function () {
    return view('privacy');
});
Route::get('/profile/{id}','ShowUsersProfileController@show')->name('profile');


