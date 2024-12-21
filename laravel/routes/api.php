<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testctrl;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/testapi', [testctrl::class, 'testAPIfunc']);

Route::get('/sendItems', [testctrl::class, 'sendItemsAPI']);

Route::get('/findItemPrice/{id}', [testctrl::class, 'sendItemsPriceAPI']);

Route::post('/storeItems', [testctrl::class, 'storeItemsAPI']);

Route::put('/editItems/{id}', [testctrl::class, 'editItemsAPI']);

Route::delete('/deleteItem/{id}', [testctrl::class, 'deleteItemsAPI']);