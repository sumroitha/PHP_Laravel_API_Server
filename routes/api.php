<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\dumyAPI;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\MemberController;

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

// First API
Route::get("data",[dumyAPI::class,'getData']);
// Get data with API
Route::get("list",[DeviceController::class,'list']);
// Get data by id
Route::get("list/{id}",[DeviceController::class,'listById']);
// Post API
Route::post("add",[DeviceController::class,'add']);
// Put API
Route::put("update",[DeviceController::class,'update']);
// Delete API
Route::delete("delete/{id}",[DeviceController::class,'delete']);
// Search API
Route::get("search/{name}",[DeviceController::class,'search']);

// API with resources
Route::apiResource("member",MemberController::class);