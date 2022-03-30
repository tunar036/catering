<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;
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


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services',[ServiceController::class,'index'])->name('services');
Route::get('/service_details/{id}',[ServiceController::class,'service_details'])->name('service_details');
Route::get('/projects',[ProjectController::class,'index'])->name('projects');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
