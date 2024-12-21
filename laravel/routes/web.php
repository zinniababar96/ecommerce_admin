<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\testctrl;

use App\Http\Controllers\itemResourceController;

use App\Http\Controllers\resSaveImage;

use App\Http\Controllers\itemsProfile;




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



Route::get('/contact', [testctrl::class, 'xyz']);

Route::get('/items', [testctrl::class, 'itemsFunc']);

Route::get('/home', [testctrl::class, 'homeFunc']);

Route::get('/stiched', [testctrl::class, 'stichedFunc']);

Route::get('/unstiched', [testctrl::class, 'unstichedFunc']);

Route::get('/cart', [testctrl::class, 'cartFunc']);
Route::post('/insert', [testctrl::class, 'saveProducts']);

Route::get('/editRecord/{id}', [testctrl::class, 'editForm']);

Route::post('/editCommitRoute', [testctrl::class, 'editCommit']);

Route::get('/deleteRecord/{id}', [testctrl::class, 'deleteCommit']);

Route::get('send-mail', [testctrl::class, 'sendemail']);

Route::resource('clothes', itemResourceController::class);

Route::resource('saveimage', resSaveImage::class);


Route::resource('itemsprofile', itemsProfile::class);



