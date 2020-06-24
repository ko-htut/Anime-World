<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','PageController@home');
Route::get('/about-us','PageController@aboutus');
Route::get('/movies','PageController@movie');
Route::get('/movies/{id}/{slug}','PageController@movieDetail');
Route::get('/series','PageController@series');
Route::get('/series/{id}/{slug}','PageController@seriesDetail');
Route::get('/season/{id}/{slug}','PageController@season');
Route::get('/category/{id}/{slug}','PageController@sortcategory');
Route::get('/partner/{id}/{slug}','PageController@sortpartner');

Auth::routes();
Route::get('/logout', function()
	{
		Auth::logout();
	Session::flush();
		return Redirect::to('/');
	});
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/backend/dashboard','DashboardController@home');

Route::get('/backend/subtitle','SubtitleController@index')->name('subtitle');
Route::get('/backend/subtitle.add','SubtitleController@create');
Route::post('/backend/subtitle.add','SubtitleController@store');
Route::get('/backend/subtitle.edit/{id}','SubtitleController@edit');
Route::post('/backend/subtitle.edit/{id}','SubtitleController@update');
Route::get('/backend/subtitle.delete/{id}','SubtitleController@destroy');

Route::get('/backend/dataplan','DataplanController@index')->name('dataplan');
Route::get('/backend/dataplan.add','DataplanController@create');
Route::post('/backend/dataplan.add','DataplanController@store');
Route::get('/backend/dataplan.edit/{id}','DataplanController@edit');
Route::post('/backend/dataplan.edit/{id}','DataplanController@update');
Route::get('/backend/dataplan.delete/{id}','DataplanController@destroy');

Route::get('/backend/movies','MovieController@index')->name('movie');
Route::get('/backend/movies.add','MovieController@create');
Route::post('/backend/movies.add','MovieController@store');
Route::get('/backend/movies.edit/{id}','MovieController@edit');
Route::post('/backend/movies.edit/{id}','MovieController@update');
Route::get('/backend/movies.delete/{id}','MovieController@destroy');

Route::get('/backend/series/series','SeriesController@index');
Route::get('/backend/series/series.add','SeriesController@create');
Route::post('/backend/series/series.add','SeriesController@store');
Route::get('/backend/series/series.edit/{id}','SeriesController@edit');
Route::post('/backend/series/series.edit/{id}','SeriesController@update');
Route::get('/backend/series/series.delete/{id}','SeriesController@destroy');

Route::get('/backend/series/season','SeasonController@index');
Route::get('/backend/series/season.add','SeasonController@create');
Route::post('/backend/series/season.add','SeasonController@store');
Route::get('/backend/series/season.edit/{id}','SeasonController@edit');
Route::post('/backend/series/season.edit/{id}','SeasonController@update');
Route::get('/backend/series/season.delete/{id}','SeasonController@destroy');

Route::get('/backend/series/episodes','EpisodeController@index');
Route::get('/backend/series/episodes.add','EpisodeController@create');
Route::post('/backend/series/episodes.add','EpisodeController@store');
Route::get('/backend/series/episodes.edit/{id}','EpisodeController@edit');
Route::post('/backend/series/episodes.edit/{id}','EpisodeController@update');
Route::get('/backend/series/epsiodes.delete/{id}','EpisodeController@destroy');

Route::get('/backend/series/comic-episodes','EpisodeController@comicIndex');
Route::get('/backend/series/comic-episodes.add','EpisodeController@comicCreate');
Route::post('/backend/series/comic-episodes.add','EpisodeController@comicStore');
Route::get('/backend/series/comic-episodes.edit/{id}','EpisodeController@comicEdit');
Route::post('/backend/series/comic-episodes.edit/{id}','EpisodeController@comicUpdate');
Route::get('/backend/series/comic-episodes.delete/{id}','EpisodeController@comicDestroy');

Route::get('/backend/credit','CreditController@index');
Route::get('/backend/credit.add','CreditController@create');
Route::post('/backend/credit.add','CreditController@store');
Route::get('/backend/credit.edit/{id}','CreditController@edit');
Route::post('/backend/credit.edit/{id}','CreditController@update');
Route::get('/backend/credit.delete/{id}','CreditController@destroy');

Route::get('/backend/category','CategoryController@index');
Route::get('/backend/category.add','CategoryController@create');
Route::post('/backend/category.add','CategoryController@store');
Route::get('/backend/category.edit/{id}','CategoryController@edit');
Route::post('/backend/category.edit/{id}','CategoryController@update');
Route::get('/backend/category.delete/{id}','CategoryController@destroy');

Route::get('/backend/comic/series','ComicSeriesController@index');
Route::get('/backend/comic/series.add','ComicSeriesController@create');
Route::post('/backend/comic/series.add','ComicSeriesController@store');
Route::get('/backend/comic/series.edit/{id}','ComicSeriesController@edit');
Route::post('/backend/comic/series.edit/{id','ComicSeriesController@update');
Route::get('/backend/comic/series.delete/{id}','ComicSeriesController@destroy');

Route::get('/backend/comic/season','ComicSeasonController@index');
Route::get('/backend/comic/season.add','ComicSeasonController@create');
Route::post('/backend/comic/season.add','ComicSeasonController@store');
Route::get('/backend/comic/season.edit/{id}','ComicSeasonController@edit');
Route::post('/backend/comic/season.edit/{id}','ComicSeasonController@update');
Route::get('/backend/comic/season.delete/{id}','ComicSeasonController@destroy');

Route::get('/backend/comic/episode','ComicEpisodeController@index');
Route::get('/backend/comic/episode.add','ComicEpisodeController@create');
Route::post('/backend/comic/episode.add','ComicEpisodeController@store');
Route::get('/backend/comic/episode.edit/{id}','ComicEpisodeController@edit');
Route::post('/bakend/comic/episode.edit/{id}','ComicEpisodeController@update');
Route::get('/backend/comic/episode.delete/{id}','ComicEpisodeController@destroy');

