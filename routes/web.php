<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ParkController;
use App\Http\Controllers\ThanaController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\DivisionController;



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
Route::resource('parks',ParkController::class);
Route::get('parks/{park}/assign-division', [ParkController::class, 'assignDivisionForm'])->name('parks.assign-division.form');
Route::post('parks/{park}/assign-division', [ParkController::class, 'assignDivision'])->name('parks.assign-division');
Route::get('parks/{park}/photo',[ParkController::class, 'parkPhoto'])->name('parks.photo');


