<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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


// Route::get('/', [HomeController::class, 'index']);
// Route::get('/home', [HomeController::class, 'index']);

Route::get('/', [ProfileController::class, 'profile']);
Route::get('/profile', [ProfileController::class, 'profile']);

// Route::get('/', function () {
//     return view('welcome');
// });
