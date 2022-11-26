<?php

use App\Http\Controllers\DistrictController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\ParkController;
use App\Http\Controllers\ThanaController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('divisions', DivisionController::class)
    ->except('show');
Route::resource('districts', DistrictController::class)
    ->except('show');
Route::resource('thanas', ThanaController::class)
    ->except('show');
Route::resource('parks',ParkController::class)
    ->except('show');



