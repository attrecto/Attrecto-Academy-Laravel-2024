<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('login',  [AuthController::class, 'login']);
});

Route::prefix('courses')->group(function () {
    Route::middleware(['api', 'role:admin'])->group(function () {
        Route::post('/',[CourseController::class,'store']);
        Route::get('/',  [CourseController::class, 'index']);
        Route::get('/{id}',  [CourseController::class, 'show']);
        Route::put('/{id}',[CourseController::class,'update']);
        Route::delete('/{id}',[CourseController::class,'destroy']);

    });
});

Route::group(['middleware' => ['api']], function() {
    Route::post('/users',[UserController::class,'store']);
});
