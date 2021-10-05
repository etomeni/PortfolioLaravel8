<?php

use App\Http\Controllers\pagesController;
use App\Http\Controllers\dashboardController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [pagesController::class, 'index']);
Route::get('projects', [pagesController::class, 'projects']);
Route::get('resume', [pagesController::class, 'resume']);

Route::get('contact', [pagesController::class, 'getContact']);
Route::post('contact', [pagesController::class, 'postContact']);

Route::get('dashboard', [pagesController::class, 'Dashboard_index'])->middleware('auth');

Route::get('see_login', [pagesController::class, 'login'])->name('login');
Route::post('see_login', [pagesController::class, 'loginAuth']);

Route::get('logout', [pagesController::class, 'logoutAuth']);

// DASHBOARD
Route::get('new_project', [dashboardController::class, 'new_project']);