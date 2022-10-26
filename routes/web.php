<?php

use App\Http\Controllers\LawyerController;
use Illuminate\Support\Facades\Route;

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
    return view('Dashboard.layout');
});

Route::get('login', [LawyerController::class, "view"]);

Route::get('/register', [LawyerController::class, "show"]);

Route::post('registered', [LawyerController::class, "store"]);

Route::post('login', [LawyerController::class, "login"]);