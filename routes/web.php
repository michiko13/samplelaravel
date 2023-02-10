<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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
    return view('auth.login');
});

Route::group(['middleware'=>'auth'],function()
{
    Route::get('home',function()
    {
        return view('home');
    
    });
});

Auth::routes();

// Route::get('/dashboard', view: 'home');

// // ----------------------------- main dashboard ------------------------------//
Route::get(HomeController::class, function () {
    Route::get('/home', 'index')->name('home');
    Route::get('/dashboard', 'dashboard')->name('/dashboard');
});
