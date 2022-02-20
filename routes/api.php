<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\Ranking\RankingController;
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

Route::post('login', [AuthController::class, 'login']);

Route::middleware(['auth:api'])->group(function () {
    Route::get('logout', [AuthController::class, 'logout']);

    Route::prefix('ranking')->as('ranking.')->group(function () {
        Route::get('movement/{movement}', [RankingController::class, 'index'])->name('ranking.movement');
        Route::get('general', [RankingController::class, 'general'])->name('ranking.general');
    });
});
