<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Src')->prefix('extractor')->group(function () {
    Route::get('/', 'Extractor\Http\Controller\ExtractorController@index');
    Route::post('/', 'Extractor\Http\Controller\ExtractorController@create');
    Route::put('/{id}', 'Extractor\Http\Controller\ExtractorController@update');
    Route::delete('/{id}', 'Extractor\Http\Controller\ExtractorController@delete');
    Route::post('/paginate', 'Extractor\Http\Controller\ExtractorController@paginate');
});
