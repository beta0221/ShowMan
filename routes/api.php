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

Route::get('getContact','ContactController@getContact');
Route::get('getJobRelease','JobreleaseController@getJobRelease');
Route::get('getWanted','WantedController@getWanted');
Route::get('getResume','ResumeController@getResume');
Route::get('getNews','NewsController@api_getNews');
Route::get('admin/getNews','NewsController@api_admin_getNews');
Route::post('admin/news/{slug}/delete','NewsController@destroy');

Route::get('getJobList','JobreleaseController@getJobList');

Route::post('deleteJob', 'JobreleaseController@deleteJob');
Route::post('getMessage','ContactController@getMessage');
