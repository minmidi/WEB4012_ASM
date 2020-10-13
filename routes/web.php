<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


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


Auth::routes();


Route::group(['prefix' => 'admin','middleware' => 'auth'], function () {
    Route::resources([
        '/' => 'App\Http\Controllers\Admin\AdminController',
        'user' => 'App\Http\Controllers\Admin\UserController',
        'category' => 'App\Http\Controllers\Admin\CategoryController',
        'product' => 'App\Http\Controllers\Admin\ProductController',
        'comment' => 'App\Http\Controllers\Admin\CommentController',
    ]);
});

