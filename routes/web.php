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

Route::get('/',         'FrontController@index')->name('front.index');
Route::get('/words',    'FrontController@words')->name('front.words');
Route::get('/check',    'FrontController@check')->name('front.check');

Route::group(['prefix' => 'dash-board' , 'middleware' => ['auth', 'language'] ], function(){

    Route::get('/',  'DashboardController@index')->name('dashboard.index');

    Route::get('/products',                'ProductController@index')->name('products.index');
    Route::get('/products/create',         'ProductController@create')->name('products.create');
    Route::get('/products/get_products',   'ProductController@get_products')->name('products.get_products');
    Route::post('/products/store',         'ProductController@store')->name('products.store');

    Route::get('/calendar',                'CalendarController@index')->name('calendar.index');

    Route::group(['middleware' => ['role']], function(){
        Route::resource('permissions',    'PermissionController');
        Route::resource('user_roles',     'UserRoleController');
        Route::resource('users',          'UserController');
    
    });

    Route::get('/read-notification/{id}',         'NotificationController@read')->name('notifications.read')->middleware('auth');

    Route::get('/account/edit',                   'AccountController@edit')->name('account.edit');
    Route::put('/account/update',                 'AccountController@update')->name('account.update');
});


Route::get('register',  'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout',   'Auth\LoginController@logout')->name('logout');
 
Route::get('/gmail/login',     'GmailLoginController@redirect')->name('gmail.login');
Route::get('/gmail/callback',  'GmailLoginController@callback')->name('gmail.callback');


Route::get('test',          'UserController@test');


Route::get('change-lang/{locale}', 'LanguageController@change')->name('lang.change');
