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

// User Routes For Hiring and rotuing to different pages START
Route::get('/home/login', [UserController::class, "show"]);

Route::get('/home/register', [UserController::class, "register"]);

Route::get('/', [UserController::class, "index"]);

Route::get('/home/lawyer{id}', [UserController::class, "lawyerPage"]);

Route::get('home/attorneys', [UserController::class, "attorneys"]);

Route::get('/home/logout', [UserController::class, "logout"]);

Route::post('/home/registered', [UserController::class, "store"]);

Route::post('/home/auth', [UserController::class, "login"]);

// User Routes For Hiring and routing to different pages END

// Lawyer Routes for viewing dashboard materials START
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

Route::group(['middleware'=>'lawyer'], function(){
    
    Route::get('Dashboard', [LawyerController::class, "Dashboard"] );
    Route::get('logout', [LawyerController::class, "logout"]);
    Route::post('updated', [LawyerController::class, "update"]);

});
// Lawyer Routes for viewing dashboard materials END

// Super Admin Middleware Routes START
Route::group(['middleware'=>'admin'], function(){
    
    Route::get('admin/Dashboard', [AdminController::class, "Dashboard"] );
    Route::Post('admin/Active', [AdminController::class, "Active"] );
    Route::Post('admin/Deactive', [AdminController::class, "Deactive"] );
    Route::get('admin/logout', [AdminController::class, "logout"]);
});

// Super Admin Middleware Routes END

