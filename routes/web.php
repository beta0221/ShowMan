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

Route::get('/', 'HomeController@index');
Route::get('/location',function(){
    return view('location');
});

Auth::routes();

Route::get('/admin', function(){
    return view('admin.index');
})->middleware('auth');

Route::prefix('admin')->group(function () {
    Route::get('/news','NewsController@admin_index');
    Route::get('/news/create','NewsController@create');
    Route::post('/news/store','NewsController@store');
    Route::get('/news/{slug}/edit','NewsController@edit');
    Route::put('/news/{slug}/update','NewsController@update');
});


Route::get('/news','NewsController@index');
Route::get('/news/{slug}','NewsController@show');
Route::resource('/wanted','WantedController');
Route::resource('/resume','ResumeController');
Route::resource('/contact','ContactController');
Route::resource('/jobrelease','JobreleaseController');
Route::get('/jobbillboard','JobreleaseController@billboard');
Route::get('/homeManage','HomeController@homeManage');
Route::post('/uploadImg','HomeController@uploadImg');

Route::get('temp/temp1',function(){
    return view('temp1');
});

Route::get('temp/temp2',function(){
    return view('temp2');
});
