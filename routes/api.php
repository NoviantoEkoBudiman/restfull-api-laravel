<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('/show', [ProductsController::class, 'show']);
Route::get('/detail/{id}', [ProductsController::class, 'detail']);
Route::post('/store', [ProductsController::class, 'store']);
Route::put('/update/{id}', [ProductsController::class, 'update']);
Route::delete('/delete/{id}', [ProductsController::class, 'delete']);