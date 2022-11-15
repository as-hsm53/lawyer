<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\UserController;
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
Route::get('/home/login', [UserController::class, "show"]);

Route::get('/home/register', [UserController::class, "register"]);

Route::get('/', [UserController::class, "index"]);

Route::get('/home/logout', [UserController::class, "logout"]);

Route::post('/home/registered', [UserController::class, "store"]);

Route::post('/home/auth', [UserController::class, "login"]);

Route::get('/register', [LawyerController::class, "show"]);

Route::post('registered', [LawyerController::class, "store"]);

Route::post('auth', [LawyerController::class, "login"]);

Route::get('LoggedIn',[LawyerController::class, "index"]);

Route::get('login', [LawyerController::class, "view"]);


Route::get('/index', function () {
    return view('home.index');
});

Route::get('/portfolio', function () {
    return view('lawyers.portfolio');
});

Route::get('/mail', function () {
    return view('contact.mail');
});

Route::get('/aboutUs', function () {
    return view('home.aboutUs');
});

Route::group(['middleware'=>'admin'], function(){
    
    Route::get('admin/Dashboard', [AdminController::class, "Dashboard"] );
    Route::Post('admin/Active', [AdminController::class, "Active"] );
    Route::Post('admin/Deactive', [AdminController::class, "Deactive"] );
    Route::get('admin/logout', [AdminController::class, "logout"]);

    
});


Route::group(['middleware'=>'lawyer'], function(){
    
    Route::get('Dashboard', [LawyerController::class, "Dashboard"] );
    Route::get('logout', [LawyerController::class, "logout"]);
    Route::post('updated', [LawyerController::class, "update"]);

});
