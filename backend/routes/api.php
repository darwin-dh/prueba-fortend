<?php

use App\Http\Controllers\API\PersonController;
use App\Http\Controllers\API\UserController;
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
//auth
Route::post('/login', [UserController::class, 'login']);
Route::post('/registro', [UserController::class, 'registro']);
Route::get('/list-person', [PersonController::class, 'index']);
Route::post('/list-person-date', [PersonController::class, 'filterdate']);
Route::post('/search-person', [PersonController::class, 'search']);
Route::post('/delete-person', [PersonController::class, 'destroy']);
Route::post('/update-person', [PersonController::class, 'update']);
Route::post('/add-person', [PersonController::class, 'save']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
