<?php

use App\Http\Controllers\MessageController;
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
Route::group(['prefix' => 'wedding-invitation'], function() {
    Route::get('/', function() {
        return view('wedding.hanin-dhila.index');
    });
    Route::group(['prefix' => 'backsite'], function() {
        Route::get('getMessage', [MessageController::class, 'getMessage']);
        Route::post('storeMessage', [MessageController::class, 'storeMessage']);
    });
});
