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
Route::delete('/abonement/{id}', [AbonementController::class, 'destroy']);
Route::put('/abonement/{id}', [AbonementController::class, 'update']);

Route::get('/bonus_programm',[ BonusProgrammController::class, 'index']);
Route::post('/bonus_programm', [BonusProgrammController::class, 'create']);
Route::delete('/bonus_programm/{id}', [BonusProgrammController::class, 'destroy']);
Route::put('/bonus_programm/{id}', [BonusProgrammController::class, 'update']);

Route::get('/client',[ ClientController::class, 'index']);
Route::post('/client', [ClientController::class, 'create']);
Route::delete('/client/{id}', [ClientController::class, 'destroy']);
Route::put('/client/{id}', [ClientController::class, 'update']);

Route::get('/education',[ EducationController::class, 'index']);
Route::post('/education', [EducationController::class, 'create']);
Route::delete('/education/{id}', [EducationController::class, 'destroy']);
Route::put('/education/{id}', [EducationController::class, 'update']);

Route::get('/fabricator',[ FabricatorController::class, 'index']);
Route::post('/fabricator', [FabricatorController::class, 'create']);
Route::delete('/fabricator/{id}', [FabricatorController::class, 'destroy']);
Route::put('/fabricator/{id}', [FabricatorController::class, 'update']);

Route::get('/hall',[ HallsController::class, 'index']);
Route::post('/hall', [HallsController::class, 'create']);
Route::delete('/hall/{id}', [HallsController::class, 'destroy']);
Route::put('/hall/{id}', [HallsController::class, 'update']);

Route::get('/positionWork',[ PositionWorkController::class, 'index']);
Route::post('/positionWork', [PositionWorkController::class, 'create']);
Route::delete('/positionWork/{id}', [PositionWorkController::class, 'destroy']);
Route::put('/positionWork/{id}', [PositionWorkController::class, 'update']);

Route::get('/reseption',[ ReseptionController::class, 'index']);
Route::post('/reseption', [ReseptionController::class, 'create']);
Route::delete('/reseption/{id}', [ReseptionController::class, 'destroy']);
Route::put('/reseption/{id}', [ReseptionController::class, 'update']);

Route::get('/sportInventory',[ SportInventoryController::class, 'index']);
Route::post('/sportInventory', [SportInventoryController::class, 'create']);
Route::delete('/sportInventory/{id}', [SportInventoryController::class, 'destroy']);
Route::put('/sportInventory/{id}', [SportInventoryController::class, 'update']);

Route::get('/typesOfInventory',[ TypesOfInventoryController::class, 'index']);
Route::post('/typesOfInventory', [TypesOfInventoryController::class, 'create']);
Route::delete('/typesOfInventory/{id}', [TypesOfInventoryController::class, 'destroy']);
Route::put('/typesOfInventory/{id}', [TypesOfInventoryController::class, 'update']);

Route::get('/typesOfTraning',[ TypesOfTraningController::class, 'index']);
Route::post('/typesOfTraning', [TypesOfTraningController::class, 'create']);
Route::delete('/typesOfTraning/{id}', [TypesOfTraningController::class, 'destroy']);
Route::put('/typesOfTraning/{id}', [TypesOfTraningController::class, 'update']);

Route::get('/userClub',[ UserClubController::class, 'index']);
Route::post('/userClub', [UserClubController::class, 'create']);
Route::delete('/userClub/{id}', [UserClubController::class, 'destroy']);
Route::put('/userClub/{id}', [UserClubController::class, 'update']);

Route::get('/workers',[ WorkerController::class, 'index']);
Route::post('/workers', [WorkerController::class, 'create']);
Route::delete('/workers/{id}', [WorkerController::class, 'destroy']);
Route::put('/workers/{id}', [WorkerController::class, 'update']);
