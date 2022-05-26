<?php

use App\Http\Controllers\Api\{FileController};
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::apiResource('file', FileController::class)->except(['create', 'update', 'destroy', 'index']);
Route::get('file/{id}', [FileController::class, 'show']);
Route::post('file', [FileController::class, 'store']);
