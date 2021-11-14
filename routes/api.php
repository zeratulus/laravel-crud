<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
//some.domain/api/products/
//this (Route::resource('products',...);) registers next routes:
//GET	/products	index	products.index
//GET	/products/create	create	products.create
//POST	/products/store	products.store
//GET	/products/{id}	show	products.show
//GET	/products/{id}/edit	edit	products.edit
//PUT/PATCH	/products/{id}	update	products.update
//DELETE	/products/{id}	destroy	products.destroy

Route::middleware('api')->group(function () {
    Route::resource('products', ProductController::class);
});
