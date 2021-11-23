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

Route::apiResources([
    "/client"=>ClientController::class,

    "/types_of_traning"=>TypesOfTraningController::class,
    "/user_club"=>UserClubController::class,
    "/bonus_programm"=>BonusProgrammController::class,
    "/education"=>EducationController::class,
    "/fabricator"=>FabricatorController::class,
    "/hall"=>HallsController::class,
    "/position_work"=>PositionWorkController::class,
    "/reseption"=>ReseptionController::class,
    "/sport_inventory"=>SportInventoryController::class,
    "/types_of_inventory"=>TypesOfInventoryController::class,
    "/worker"=>WorkerController::class,
    "/abonement"=>AbonementController::class
]);
