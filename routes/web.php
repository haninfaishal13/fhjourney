<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by thpe RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('wedding-invitation', function() {
    return view('wedding.hanin-dhila.index');
});
