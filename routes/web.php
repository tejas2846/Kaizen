<?php

use App\Http\Controllers\ComplaintController;
use Illuminate\Support\Facades\Auth;
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

    // return view('welcome');
    return view('home_123');
});
Route::get('/add-complaint', function () {
    return view('add-compaint');
});
Route::get('/dashboard', [ComplaintController::class, 'dashboard']);
Route::post('/add-complaint', [ComplaintController::class, 'addComplaint']);
Route::get('/update-complaint/{id}', [ComplaintController::class, 'updateComplaint']);
Route::post('/update-save-complaint', [ComplaintController::class, 'updateSaveComplaint']);
Route::get('login', function () {
    return redirect('/login');
});
Route::get('login', function () {
    return redirect('/register');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
