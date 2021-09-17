<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\AdministratorControler;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\projectsController;
use App\Http\Controllers\ProjectsController as ControllersProjectsController;
use Illuminate\Support\Facades\Auth;
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

// Example Routes
Route::get('/', [HomeController::class, 'index']);
Route::get('/tech/{tech}', [HomeController::class, 'technology']);
Route::get('/cat/{cat}', [HomeController::class, 'categoly']);
// Route::get('/view/{langName}/{id}', [HomeController::class, 'viewProjectByLanguageOne']);

Auth::routes();

Route::get('/dashboard', [AdministratorControler::class, 'index'])->name('dashboard');

Route::resource('/project', ProjectsController::class);