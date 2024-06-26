<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('dashboard');
});
Route::prefix('/staff')->name('staff.')->group(function () {
    route::get('/create', [UserController::class, 'create'])->name('create');   
});
// Route::get('/staff', function () {
//     return view('staff/index');
// });
