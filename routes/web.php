<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\websiteController;

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
Route::get('/',[websiteController::class,'home']);

Route::get('about', [HomeController::class,'about']);

Route::get('business', [HomeController::class,'business']);
Route::get('department/create',[DepartmentController::class,'create']);
Route::post('department/store',[DepartmentController::class,'store']);
Route::get('department/all',[DepartmentController::class,'all']);
Route::get('department/edit/{id}',[DepartmentController::class,'edit']);
Route::post('department/update/{id}',[DepartmentController::class,'Update']);

