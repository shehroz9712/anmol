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

        Route::get('/', 'IndexController@index')->name('index');
        Route::get('/registration', 'AuthController@register')->name('feature');
    }
);