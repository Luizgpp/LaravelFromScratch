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
    $tasks = [
        'Go to the Store',
        'Go to the Market',
        'Go to the Work',
        'Go to the Home',
    ];

    return view('welcome', [
        'tasks' => $tasks,
        'foo' => 'foobar',
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});
