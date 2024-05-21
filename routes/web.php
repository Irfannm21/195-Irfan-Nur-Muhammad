<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\Organization\DeparmentController;
use App\Http\Controllers\Organization\DirectorController;
use App\Http\Controllers\Organization\DivisionController;
use App\Http\Controllers\Organization\OfficeController;
use App\Http\Controllers\Organization\PositionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TicketController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blank', function () {
    return view('blank');
})->name('blank');

Route::middleware('auth')->group(function() {
    Route::resource('basic', BasicController::class);
    Route::resource('product', ProductController::class);
    Route::resource('office', OfficeController::class);
    Route::resource('director', DirectorController::class);
    Route::resource('department', DeparmentController::class);
    Route::resource('division', DivisionController::class);
    Route::resource('position', PositionController::class);
    Route::resource('client', ClientController::class);
    Route::resource('ticket', TicketController::class);
});
