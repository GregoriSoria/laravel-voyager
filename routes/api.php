<?php

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Product;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Api'], function () {

    // Products
    Route::group(['prefix' => 'products'], function() {
        Route::get('/', 'ProductsController@list');
        Route::get('/{id}', 'ProductsController@find');
    });

});


