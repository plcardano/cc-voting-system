<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\Auth\SuiController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\SuiLoginController;
use App\Http\Controllers\Auth\SuiCreateController;
use App\Http\Controllers\Auth\RegisterUserController;


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
})->name('home');

// Route::get('/login', function (){
//     return view('login');
// });

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('is_admin');
Route::get('/dashboard/result', [DashboardController::class, 'result'])->name('result')->middleware('is_admin');

Route::get('/admin', [LoginController::class, 'index'])->name('login');
Route::post('/admin', [LoginController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/register', [RegisterUserController::class, 'index'])->name('register');
Route::post('/register', [RegisterUserController::class, 'store']);

// Route::get('/sui', [SuiCreateController::class, 'index'])->name('sui')->middleware('is_admin');
// Route::get('/sui/create', [SuiCreateController::class, 'create'])->name('createsui')->middleware('is_admin');
// Route::post('/sui', [SuiCreateController::class, 'store'])->middleware('is_admin');

Route::get('/sui/login', [SuiLoginController::class, 'index'])->name('suilogin');
Route::post('/sui/login', [SuiLoginController::class, 'store']);

Route::group(['middleware' => 'prevent-back'], function() {
    Route::get('/vote', [VoteController::class, 'index'])->name('vote')->middleware('auth');
    Route::get('/vote/done', function(){
        return view('vote.done');
    })->name('done');

    Route::patch('/vote/update', [VoteController::class, 'update'])->name('voteupdate');
    Route::post('/vote', [VoteController::class, 'store']);

});


Route::resource('/candidates', CandidateController::class);

Route::resource('/sui', SuiController::class)->middleware('is_admin');

