<?php

use App\Http\Controllers\Plant\PlantController;
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

Route::group(['namespace' => 'Plants', 'prefix' => 'v1'], function() {
    /*
    |-------------------------------------------------------------------------------
    | Get all plants
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/plants
    | Controller:     PlantController@getPlants
    | Method:         GET
    | Description:    Get all plants
    */
    Route::get('/plants', [PlantController::class, 'getPlants']);


    /*
    |-------------------------------------------------------------------------------
    | Get an individual plant
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/plant
    | Controller:     PlantController@getPlant
    | Method:         GET
    | Description:    Get a plant
    */
    Route::get('/plants/{id}', [PlantController::class, 'getPlant']);


    /*
    |-------------------------------------------------------------------------------
    | Adds a New Plant
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/plants
    | Controller:     PlantController@postNewCafe
    | Method:         POST
    | Description:    Adds a new plant
    */
    Route::post('/plants', [PlantController::class, 'postNewPlant']);
});
