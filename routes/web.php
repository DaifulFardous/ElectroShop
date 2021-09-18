<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', [
 'uses'=>  'FrontendController@index',
 'as'=>'/'
]);
Route::get('/contact/us', [
 'uses'=>  'FrontendController@contact',
 'as'=>'/contact/us'
]);
Route::get('/about/us', [
 'uses'=>  'FrontendController@about',
 'as'=>'/about/us'
]);


//Auth_Route_for_both
Route::group(['middleware'=>['auth']], function (){
    Route::get('/dashboard', [
        'uses'=>'DashboardController@index',
        'as'=>'/dashboard'
    ]);
});

//Auth_Route_for_user
Route::group(['middleware'=>['auth','role:user']], function (){
    Route::get('/test2', [
        'uses'=>'FrontendController@test2',
        'as'=>'/test2'
    ]);
});

require __DIR__.'/auth.php';
