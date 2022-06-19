<?php

use PhpParser\Builder\Function_;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DHomeController;
use App\Http\Controllers\HukumController;
use App\Http\Controllers\DhukumController;
use App\Http\Controllers\contentController;
use App\Http\Controllers\DKontakController;
use App\Http\Controllers\DPofileController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\DPelayananController;

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
Route::resource('dashboard/pelayanan', pelayananController::class);
Route::resource('dashboard/hukum', HukumController::class);
Route::get('dashboard/content/create/{catagory}', [contentController::class, 'createContent'])->name('content.create.content');
Route::get('dashboard/hukum/download/{content}', [HukumController::class, 'download'])->name('hukum.download');
Route::get('home', [DHomeController::class, 'index']);
Route::get('profile', [DPofileController::class, 'index']);
Route::get('pelayanan', [DPelayananController::class, 'index']);
Route::get('produkhukum', [DhukumController::class, 'index']);
Route::get('hubungi', [DKontakController::class, 'index']);
