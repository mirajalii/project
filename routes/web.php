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

Route::get('/', function () {
    return view('welcome');
});


/*
    GET /project (index)

    GET /project/create (create)

    GET /project/1 (show)

    POST /project (store)

    GET /project/1/edit (edit)

    PATCH /project/1 (update)

    DELETE /project/1 (destroy)

*/

Route::resource('projects','ProjectsController');


// Route::get('/projects','ProjectsController@index');

// Route::get('/projects/create','ProjectsController@create');

// Route::get('/projects/{project}','ProjectsController@show');

// Route::post('/projects','ProjectsController@store');

// Route::get('/project/{project}/edit','ProjectsController@edit');

// Route::patch('/project/{project}','ProjectsController@update');

// Route::delete('/project/{project}','ProjectsController@delete');