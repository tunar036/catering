<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomepageController;

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
    return view('homepage');
});



Route::get('/',[HomepageController::class,'index'])->name('homepage');
Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/services',[ServiceController::class,'index'])->name('services');
Route::get('/service_details/{id}',[ServiceController::class,'service_details'])->name('service_details');
Route::get('/projects',[ProjectController::class,'index'])->name('projects');
Route::get('/project_details/{id}',[ProjectController::class,'project_details'])->name('project_details');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
