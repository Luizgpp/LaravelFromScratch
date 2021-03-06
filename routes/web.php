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

Route::get('/', 'PagesController@home');

Route::resource('projects', 'ProjectsController');

Route::post('/projects/{project}/task', 'ProjectTasksController@store');

Route::patch('/tasks/{task}', 'ProjectTasksController@update');

Route::get('/contact', 'PagesController@contact');

Route::get('/about', 'PagesController@about');
