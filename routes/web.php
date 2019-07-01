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

GET /projects (index)

GET /projects create (create)

GET /projects/1 (show)

POST /projects (store)

GET /projects/1/edit (edit)

PATCH /projects/1 (update)

Delete /projects/1 (destroy)

*/

Route::resource('projects', 'TutsController'); // This is an alternate to below routes. To see this. Enter php artisan route:list in console.

// Route::get('/projects', 'TutsController@index');

// Route::get('/projects/create', 'TutsController@create');

// Route::get('/projects/{project}', 'TutsController@show');

// Route::post('/projects', 'TutsController@store');

// Route::get('/projects/{project}/edit', 'TutsController@edit');

// Route::patch('/projects/{project}', 'TutsController@update');

// Route::delete('/projects/{project}/delete', 'TutsController@destroy');
