<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);
Route::group(['middleware' => ['auth', 'can:isAdmin']], function () {

    Route::get('/admincp', [HomeController::class, 'index'])->name('home');
    Route::resource('/admincp/category', \App\Http\Controllers\CategoryController::class)->except('create', 'edit');
    Route::resource('/admincp/posts', \App\Http\Controllers\PostController::class);
    Route::resource('/admincp/contacts', \App\Http\Controllers\ContactController::class);
    Route::post('/upload', [App\Http\Controllers\AdmincpController::class, 'tinymce'])->name('upload');
});

Route::get('/contact-us', [App\Http\Controllers\FrontendController::class, 'contact']);
Route::post('/contact-us/post', [App\Http\Controllers\FrontendController::class, 'contactpost'])->name('contactpost');

Route::get('/media/{slug}/', [App\Http\Controllers\PostController::class, 'showpost'])->name('showpost');
Route::get('/category/{slug}', [App\Http\Controllers\CategoryController::class, 'show']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
