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

Route::middleware('auth:api')->post('/logout', 'UsersController@logout');
Route::post('/login', 'UsersController@login');

Route::post('/register', 'Auth\RegisterController@register');

Route::resource('/projects', 'ProjectsController')->middleware(['auth:api']);

Route::post('/projects', 'ProjectsController@store')->middleware(['auth:api', 'checkifmanager']);
Route::get('/projects/{project}', 'ProjectsController@show')->middleware(['auth:api', 'checkifmanageroremployee']);
Route::get('/projects/{project}/tasks', 'ProjectsController@tasks')->middleware(['auth:api', 'checkifmanageroremployee']);
Route::post('/projects/{project}/tasks', 'ProjectsController@storeTask')->middleware(['auth:api', 'checkifmanageroremployee']);