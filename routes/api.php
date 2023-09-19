<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PizzaController;
use App\Http\Controllers\IngredienteController;
use App\Http\Controllers\TieneController;
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



Route::prefix('v1')->group(function(){
    Route::get("/pizza",[PizzaController::class, "Read"]);
    Route::get("/pizza/{d}",[PizzaController::class, "ReadOne"]);
    Route::post("/pizza",[PizzaController::class, "Create"]);
    Route::delete("/pizza/{d}",[PizzaController::class, "Delete"]);
    Route::put("/pizza/{d}",[PizzaController::class, "Update"]);

    Route::get("/ingrediente",[IngredienteController::class, "Read"]);
    Route::get("/ingrediente/{d}",[IngredienteController::class, "ReadOne"]);
    Route::post("/ingrediente",[IngredienteController::class, "Create"]);
    Route::delete("/ingrediente/{d}",[IngredienteController::class, "Delete"]);
    Route::put("/ingrediente/{d}",[IngredienteController::class, "Update"]);

    Route::get("/tiene",[TieneController::class, "Read"]);
    Route::post("/tiene",[TieneController::class, "Create"]);
});


