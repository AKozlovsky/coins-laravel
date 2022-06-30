<?php

use App\Http\Controllers\ActionController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ListsController;

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

// Page Route
// Route::get('/', [PageController::class, 'blankPage'])->middleware('verified');
Route::get('/', [DashboardController::class, 'dashboard']);

// locale route
Route::get('lang/{locale}', [LanguageController::class, 'swap']);

Auth::routes(['verify' => true]);

Route::get('/add', [ActionController::class, 'add']);

Route::get('/continents', [ListsController::class, 'continents']);
Route::get('/countries', [ListsController::class, 'countries']);
Route::get('/other-criteria', [ListsController::class, 'otherCriteria']);

Route::get('/list/{continent}/{country?}', [ListsController::class, 'list']);
