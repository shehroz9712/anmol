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

Route::get('/', 'IndexController@index')->name('login'); // for redirection purpose

Route::name('admin.')->group(
    function () {

        Route::get('admin', 'IndexController@index');

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

        Route::resource('administrators', 'AdministratorsController');
        Route::resource('pages', 'PagesController');
        Route::resource('blogs', 'BlogsController');
        Route::resource('careers', 'CareersController');
        Route::resource('locations', 'LocationController');
        Route::resource('testimonials', 'TestimonialsController');
        Route::resource('sliders', 'SlidersController');
        Route::resource('sections', 'SectionsController');
        Route::resource('news_slides', 'News_slideController');
        Route::resource('apply_jobs', 'ApplyJobController');
        Route::resource('features', 'FeaturesController');
        Route::resource('site-settings', 'SiteSettingsController');
        //        Route::resource('users', 'UsersController');
        Route::resource('newsletter-subscribers', 'NewsletterSubscriberController');
        Route::resource('contact-queries', 'ContactQueryController');
        Route::resource('faqs', 'FaqController');
        Route::get('country-state-city', 'CountryStateCityController@index');
        Route::post('get-states-by-country', 'CountryStateCityController@getState');
        Route::post('get-cities-by-state', 'CountryStateCityController@getCity');

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
