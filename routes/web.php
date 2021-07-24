<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/our-team', [PagesController::class, 'shop']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/portfolio', [PagesController::class, 'portfolio']);
Route::get('/portfolio-list', [PagesController::class, 'portfolioList']);
Route::get('/gallery', [PagesController::class, 'portfolioMasonry']);
Route::get('/blog-standard', [PagesController::class, 'blogStandard']);
Route::get('/blog-post', [PagesController::class, 'blogSingle']);
Route::get('/blog-grid', [PagesController::class, 'blogGrid']);
Route::get('/404', [PagesController::class, 'ioi']);
