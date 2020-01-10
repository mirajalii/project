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

use Illuminate\Filesystem\Filesystem;

use App\Example;

Route::get('/', function () {

    dd(app('App\Example'));

    return view('welcome');

});

Route::resource('projects','ProjectsController');

Route::post('/projects/{project}/tasks','ProjectTasksController@store');

Route::post('/completed-tasks/{task}','CompletedTasksController@store');

Route::delete('/completed-tasks/{task}','CompletedTasksController@destroy');
