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
Route::get('/projects/{project}', 'ProjectsController@show')->middleware(['auth:api', 'checkifnotadminisowner']);
Route::get('/projects/{project}/tasks', 'ProjectsController@tasks')->middleware(['auth:api', 'checkifnotadminisowner']);
Route::get('/projects/{project}/manager', 'ProjectsController@manager')->middleware(['auth:api']);
Route::patch('/projects/{project}/manager', 'ProjectsController@updateManager')->middleware(['auth:api', 'checkifadmin']);
