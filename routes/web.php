<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;

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

Route::get('/', [ContactsController::class, 'index']);
Route::post('/confirm', [ContactsController::class, 'confirm']);




Route::post('/confirm', 'ContactsController@confirm')->name('confirm');
Route::post('/process', 'ContactsController@process')->name('process');
Route::get('/complete', 'ContactsController@complete')->name('complete');
