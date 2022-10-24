<?php

use App\Http\Controllers\Front\IndexController;
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

// Route::get('/', function () {
//     return redirect()->route('admin.auth.login');
// });

Route::name('front.')->group(
    function () {

        Route::get('/', 'IndexController@create_event')->name('index');
        Route::get('/registration', 'AuthController@registration')->name('registration');
        Route::post('register', 'AuthController@register')->name('register');
        Route::get('/login', 'AuthController@login_form')->name('login');
        Route::post('/login_submit', 'AuthController@login')->name('login_submit');
        Route::get('/Event-Details', 'IndexController@create_event')->name('create_event');
        Route::post('/submit_events', 'EventsController@submit_events')->name('submit_events');
        Route::get('/Venue-Info/{id}', 'EventsController@venue_info')->name('venue_info');
        Route::post('/submit_venue', 'EventsController@submit_venue')->name('submit_venue');
        Route::get('/Menu/{id}', 'EventsController@menu')->name('menu');
        Route::post('/submit_menu', 'EventsController@submit_menu')->name('submit_menu');
        Route::get('/Service-Style/{id}', 'EventsController@service')->name('service');
        Route::post('/submit_service', 'EventsController@submit_service')->name('submit_service');
        Route::get('/Equipments/{id}', 'EventsController@equipments')->name('equipments');
        Route::post('/submit_equipments', 'EventsController@submit_equipments')->name('submit_equipments');
        Route::get('/Labour-Staff/{id}', 'EventsController@labour_staff')->name('labour_staff');
        Route::post('/submit_labour_staff', 'EventsController@submit_labour_staff')->name('submit_labour_staff');
    }

);