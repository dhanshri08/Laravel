<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\LoginController;

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
//     return view('index');
// });
Route::get('/datatable', function () {
    return view('datatable');
});
// Route::get('/', [CrudController::class,'index']);
Route::post('/manage', [CrudController::class,'manage']);
Route::get('/edit/{id}', [CrudController::class,'edit']);
Route::get('/delete/{id}', [CrudController::class,'delete']);
Route::get('/search', [CrudController::class,'search']);

Route::get('/login', [LoginController::class,'index']);
// Route::post('/login', [LoginController::class,'loginUser'])->name('login.auth.login');
Route::post('/login', [LoginController::class,'loginUser'])->name('login.auth.login');


Route::get('/register', [LoginController::class,'register']);
Route::post('/register', [LoginController::class,'saveUser'])->name('login.auth.register');

Route::get('/forgot', [LoginController::class,'forgot']);
Route::get('/profile', [LoginController::class,'profile'])->name('profile');

Route::get('/reset', [LoginController::class,'reset']);


Route::post('/logout', [LoginController::class,'logout'])->name('login.auth.logout');
