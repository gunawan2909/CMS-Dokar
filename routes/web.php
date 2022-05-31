<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\contentController;
use App\Http\Controllers\ProfileController;

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
    return view('welcome');
});
Route::resource('dashboard/home', HomeController::class);
Route::resource('dashboard/profile', ProfileController::class);
Route::resource('dashboard/content', contentController::class);
Route::get('dashboard/content/create/{catagory}', [contentController::class, 'createContent'])->name('content.create.content');
