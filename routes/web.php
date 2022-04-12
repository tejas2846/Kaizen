<?php

use App\Http\Controllers\adminController;
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
    return view('home_123');
});

Route::get('login', function () {
    return redirect('/login');
});
Route::get('login', function () {
    return redirect('/register');
});

Auth::routes();

Route::group(['middleware' => 'Auth'], function () {

    Route::group(['middleware' => 'isadmin'], function () {
        Route::get('/adminComplaint', [adminController::class, 'showComplaint'])->name('complaint');
        Route::get('/adminResolvedComplaint', [adminController::class, 'showResolvedComplaint'])->name('complaint.unresolved');
        Route::get('/resolved-complaint/{id}', [adminController::class, 'resolvedComplaint']);
    });

    Route::get('/add-complaint', function () {
        return view('add-compaint');
    });
    Route::get('/dashboard', [ComplaintController::class, 'dashboard'])->name('dashboard');
    Route::post('/add-complaint', [ComplaintController::class, 'addComplaint'])->name('add-complaint');
    Route::get('/update-complaint/{id}', [ComplaintController::class, 'updateComplaint']);
    Route::post('/update-save-complaint', [ComplaintController::class, 'updateSaveComplaint']);
    Route::post('/update-save-complaint', [ComplaintController::class, 'updateSaveComplaint']);
    Route::get('/deleteComplaint/{id}', [ComplaintController::class, 'deleteComplaint']);
    Route::get('/mycomplaints', [ComplaintController::class, 'mycomplaints']);
    Route::get('/resolvedcomplaints', [ComplaintController::class, 'resolvedcomplaints']);
    Route::get('/resolvedmycomplaints/{id}', [ComplaintController::class, 'resolvedmycomplaints'])->name('resolvedmycomplaints');
});
