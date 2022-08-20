<?php

use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index'])->name('home');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/home', function (){
//     $role = config('roles.models.role')::where('name', '=', 'Admin')->first();
//     //choose the default role upon user creation.
//     auth()->user()->attachRole($role);
//     return view('home');
// })->name('home');


Route::namespace('Admin')->prefix('admin')->as('admin.')->middleware('auth')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
});
