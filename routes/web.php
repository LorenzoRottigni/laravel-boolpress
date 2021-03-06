<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use App\Post;
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

//Route::get('/', function () {
//    //return view('guest.home');
//    return view('guest.home');
//})->name("guest.home");



Auth::routes();

# Route::get('/home', '/Admin/HomeController@index')->name('home');

Route::namespace('Admin')
    ->name('admin.')
    ->prefix('admin')
    ->middleware('auth')
    ->group(function(){
        Route::get('/', 'HomeController@index')
        ->name('home');

        Route::resource('users','UserController');

        Route::resource('posts', 'PostController');
    }
);





Route::get('{any?}', function(){
    return view("guest.home");
});
