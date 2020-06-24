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
Route::get('/dataplan','ApiController@dataplan');
Route::get('/subtitle','ApiController@subtitle');
Route::get('/partner','ApiController@partner');
Route::get('/category','ApiController@category');
Route::get('/movies','ApiController@movie');
Route::get('/series','ApiController@series');
Route::get('/season','ApiController@season');
Route::get('/series/{id}/season','ApiController@seasonByseries');
Route::get('/season/{id}/episode','ApiController@episodeByseason');
Route::get('/comic/series','ApiController@seriesComic');
Route::get('/comic/series/{id}/season','ApiController@seaseriesComic');
Route::get('/comic/season','ApiController@seasonComic');
Route::get('/comic/season/{id}/episodes','ApiController@episeasonComic');

