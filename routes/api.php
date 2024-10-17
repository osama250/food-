<?php

use App\Http\Controllers\API\ExcursionController;
use App\Http\Controllers\API\AgeController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\CruiseReviewController;
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



Route::middleware(['auth:user','StatusMiddleware'])->group(function(){
    Route::get('profile', [AuthController::class, 'Profile']);
    Route::post('update-profile', [AuthController::class, 'UpdateProfile']);
    Route::get('logout', [AuthController::class, 'Logout']);
    Route::post('change-password', [AuthController::class, 'ChangePassword']);
    Route::post('cruise/add-or-update-review',[CruiseReviewController::class,'addOrUpdateReview']);
});
