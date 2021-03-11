<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('lich','TD_BundesLigaCtrl@lich');

Route::group(['prefix'=>'page'],function(){

	Route::get('home','HomeCtrl@gethotgame');
	
	Route::group(['prefix'=>'BundesLiga'],function(){
		Route::get('clb','TD_BundesLigaCtrl@listclb');
		Route::get('bxh','TD_BundesLigaCtrl@bxh');
		Route::get('lich','TD_BundesLigaCtrl@lich');
		Route::get('favorite/{clb}','favoriteCtrl@postFavorite');
	});

	Route::group(['prefix'=>'LaLiga'],function(){
		Route::get('clb','TD_LaLigaCtrl@listclb');
		Route::get('bxh','TD_LaLigaCtrl@bxh');
		Route::get('lich','TD_LaLigaCtrl@lich');
		Route::post('favorite','favoriteCtrl@postFavorite');
	});

	Route::group(['prefix'=>'SerieA'],function(){
		Route::get('clb','TD_SerieACtrl@listclb');
		Route::get('bxh','TD_SerieACtrl@bxh');
		Route::get('lich','TD_SerieACtrl@lich');
		Route::post('favorite/{clb}','favoriteCtrl@postFavorite');
	});

	Route::group(['prefix'=>'PremierLeague'],function(){
		Route::get('clb','TD_PremierLeagueCtrl@listclb');
		Route::get('bxh','TD_PremierLeagueCtrl@bxh');
		Route::get('lich','TD_PremierLeagueCtrl@lich');
		Route::post('favorite/{clb}','favoriteCtrl@postFavorite');
	});

	Route::group(['prefix'=>'League1'],function(){
		Route::get('clb','TD_League1Ctrl@listclb');
		Route::get('bxh','TD_League1Ctrl@bxh');
		Route::get('lich','TD_League1Ctrl@lich');
		Route::post('favorite/{clb}','favoriteCtrl@postFavorite');
	});
});

Route::get('login','HomeCtrl@getLogin');
Route::post('login','HomeCtrl@postLogin');
Route::get('register','HomeCtrl@getRegister');
Route::post('register','HomeCtrl@postRegister');
Route::get('logout','HomeCtrl@logout');
Route::get('test','HomeCtrl@test');