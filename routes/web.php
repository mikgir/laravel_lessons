<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])
    ->name('home');
Route::get('/news', [HomeController::class, 'showAll'])
    ->name('news');
Route::get('/news/{id}', [HomeController::class, 'show'])
    ->where('id', '\d+')
    ->name('news.show');


//Admin routes
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('news', NewsController::class);
});
