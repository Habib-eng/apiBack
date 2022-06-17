<?php

use App\Http\Controllers\adminOperations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\userManagement;
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

// Register and Login

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


Route::get('/employers', [adminOperations::class, "getEmployersList"]);
Route::get('/reclamations', [adminOperations::class, "getReclamationsList"]);
Route::post('/reclamations', [userManagement::class, "store"]);
Route::get('/myReclamations', [userManagement::class, "index"]);
Route::get('/satisfaction', [adminOperations::class, "TauxSatisfaction"]);
Route::get('/statistiques', [adminOperations::class, "MonthStatistics"]);