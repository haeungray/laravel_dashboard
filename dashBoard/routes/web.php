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

Route::get('/', 'PagesController@getIndex');
Route::get('/dashboard', 'PagesController@getIndex');
Route::get('/forcasting', 'PagesController@getForcasting');
// Route::get('/campaign', 'PagesController@getCampaign');
Route::get('/report', 'PagesController@getReport');
Route::get('/optimized_board', 'OptimizedController@index');
Route::get("/view",'OptimizedController@search');
Route::resource('campaign', 'CampaignController');
