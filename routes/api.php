<?php

use App\Http\Controllers\ApiUserController;
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

Route::post('register-api-user', [ApiUserController::class, 'register']);
Route::post('login-api-user', [ApiUserController::class, 'login'])->name('login');

Route::middleware('auth:api')->group(function (){
    Route::get('logged-in-user', [ApiUserController::class, 'loggedInUser']);
});
