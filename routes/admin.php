<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', 'DashboardController@index')->name('login'); // for redirection purpose
Route::get('admin', 'DashboardController@index')->name('login'); // for redirection purpose

Route::name('admin.')->group(
    function () {

        Route::get('admin', 'DashboardController@index');

        # to show login form
        Route::get('/auth/login', [
            'uses' => 'Auth\LoginController@showLoginForm',
            'as' => 'auth.login'
        ]);

        # login form submits to this route
        Route::post('/auth/login', [
            'uses' => 'Auth\LoginController@login',
            'as' => 'auth.login'
        ]);

        # logs out admin user
        # it was post method before I recieved MethodNotAllowedHttpException
        Route::any('/auth/logout', [
            'uses' => 'Auth\LoginController@logout',
            'as' => 'auth.logout'
        ]);

        # Password reset routes
        Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::post('/password/reset', 'Auth\ResetPasswordController@reset');
        Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

        # shows dashboard
        Route::get('dashboard', [
            'uses' => 'DashboardController@index',
            'as' => 'dashboard.index'
        ]);

        Route::resource('administrators', 'AdminController');

        # To show change password form
        Route::get('/change-password', [
            'uses' => 'UsersController@changePassword',
            'as' => 'users.change-password'
        ]);

        # Change password form submits to this route
        Route::post('/change-password', [
            'uses' => 'UsersController@processChangePassword',
            'as' => 'users.change-password'
        ]);
    }

);