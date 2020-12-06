<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\PagesController; 
// var izmantot so versiju

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

// Route::get('/hello', function () {
//     // return view('welcome');
//     return "hello World";
// });

// Route::get('/users/{id}/{name}', function($id, $name ) {
//     return 'This is User: ' . $name. ' with id of ' . $id;
// });

Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/services', 'App\Http\Controllers\PagesController@services');


// Route::get('/', [PagesController::class,'index']);
// Route::get('/', [PagesController::class,'about']);
// Route::get('/', [PagesController::class,'services']);

// Route::get('/about', function() {
//     return view('pages.about');
// });
Route::resource('posts', 'App\Http\Controllers\PostController');

Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');