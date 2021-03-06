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

Route::middleware(['cors','auth:api'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api', 'cors')->post('/logout', 'UsersController@logout');
Route::post('/login', 'UsersController@login')->middleware('cors');
Route::post('/register', 'Auth\RegisterController@register')->middleware('cors');
Route::resource('/projects', 'ProjectsController')->middleware(['cors','auth:api']);
Route::get('/projects/{project}', 'ProjectsController@show')->middleware(['cors','auth:api', 'checkifnotadminisowner']);
Route::get('/projects/{project}/tasks', 'ProjectsController@tasks')->middleware(['cors','auth:api', 'checkifnotadminisowner']);
Route::get('/projects/{project}/manager', 'ProjectsController@manager')->middleware(['auth:api']);
Route::patch('/projects/{project}/manager', 'ProjectsController@updateManager')->middleware(['auth:api', 'checkifadmin']);
Route::post('/projects/{project}/tasks', 'ProjectsController@storeTask')->middleware(['cors', 'auth:api', 'checkifnotadminisowner']);
Route::patch('/projects/{project}/tasks/{task}', 'ProjectsController@updateTask')->middleware(['cors','auth:api', 'checkifnotadminisowner']);

