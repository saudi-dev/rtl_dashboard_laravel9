<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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
    return view('home');
})->middleware('web');
 
Auth::routes();
Route::group(['middleware' => ['auth']], function() {
    Route::get('/{page}', [AdminController::class,'index']);
    Route::post('/updateProfile', [HomeController::class, 'updateProfile'])->name('update.profile');
 });




