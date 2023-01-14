<?php

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
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::group(['namespace' => 'App\Http\Controllers'], function() {
    Route::middleware(['auth'])->name('dashboard.')->prefix('dashboard')->group(function() {
        Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
    });

    Route::middleware(['auth', 'permission'])->name('dashboard.')->prefix('dashboard')->group(function() {
        
        // Permission 
        // Route::middleware(['permissions'])->group(function() {
            Route::resource('users', Admin\UsersController::class);

            // Roles & Permissions
            Route::resource('roles', Admin\RolesController::class);
            Route::resource('permissions', Admin\PermissionsController::class);
        // });
    });
});
