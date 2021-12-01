<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ClientController;


use App\Http\Controllers\Api\UserClubController;
use App\Http\Controllers\Api\TypesOfTraningController;
use App\Http\Controllers\Api\BonusProgrammController;
use App\Http\Controllers\Api\EducationController;
use App\Http\Controllers\Api\FabricatorController;
use App\Http\Controllers\Api\HallsController;
use App\Http\Controllers\Api\PositionWorkController;
use App\Http\Controllers\Api\ReseptionController;
use App\Http\Controllers\Api\SportInventoryController;
use App\Http\Controllers\Api\TypesOfInventoryController;
use App\Http\Controllers\Api\WorkerController;
use App\Http\Controllers\Api\AbonementController;

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

Route::get('/abonement',[ AbonementController::class, 'index']);
Route::post('/abonement', [AbonementController::class, 'create']);
Route::get('/bonus_programm',[ BonusProgrammController::class, 'index']);
Route::post('/bonus_programm', [BonusProgrammController::class, 'create']);
Route::get('/client',[ ClientController::class, 'index']);
Route::post('/client', [ClientController::class, 'create']);
Route::get('/education',[ EducationController::class, 'index']);
Route::post('/education', [EducationController::class, 'create']);
Route::get('/fabricator',[ FabricatorController::class, 'index']);
Route::post('/fabricator', [FabricatorController::class, 'create']);
Route::get('/hall',[ HallsController::class, 'index']);
Route::post('/hall', [HallsController::class, 'create']);
Route::get('/positionWork',[ PositionWorkController::class, 'index']);
Route::post('/positionWork', [PositionWorkController::class, 'create']);
Route::get('/reseption',[ ReseptionController::class, 'index']);
Route::post('/reseption', [ReseptionController::class, 'create']);
Route::get('/sportInventory',[ SportInventoryController::class, 'index']);
Route::post('/sportInventory', [SportInventoryController::class, 'create']);
Route::get('/typesOfInventory',[ TypesOfInventoryController::class, 'index']);
Route::post('/typesOfInventory', [TypesOfInventoryController::class, 'create']);
Route::get('/typesOfTraning',[ TypesOfTraningController::class, 'index']);
Route::post('/typesOfTraning', [TypesOfTraningController::class, 'create']);
Route::get('/userClub',[ UserClubController::class, 'index']);
Route::post('/userClub', [UserClubController::class, 'create']);
Route::get('/workers',[ WorkerController::class, 'index']);
Route::post('/workers', [WorkerController::class, 'create']);
