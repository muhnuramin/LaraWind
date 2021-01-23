<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;
use App\Http\Controllers\adminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/voting', [mainController::class, 'index'])->name('voting');
Route::get('/manage', [adminController::class,'index'])->name('index');
Route::get('/manage/datapemilih',[adminController::class,'datapemilih']);
Route::get('/manage/suaramasuk',[adminController::class,'suaramasuk']);