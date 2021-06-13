<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\GroomsController;
use App\Http\Controllers\BridesController;

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

Route::post('/grooms', [GroomsController::class, 'store']);
Route::post('/brides', [BridesController::class, 'store']);

Route::post('/generate-token', [ChatController::class, 'generateToken']);
Route::post('/leave-channel', [ChatController::class, 'leaveChannel']);
Route::post('/join-channel', [ChatController::class, 'joinChannel'])->name('join-channel');

Route::middleware('auth:api')->group(function () {

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/users', function (Request $request) {
        return response()->json(['name' => auth()->User()->name]);
    });
});