<?php


Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/', 'PostsController@index');

Route::get('/', function () {

	$tasks = DB::table('tasks')->latest()->get();
    return view('welcome', compact('tasks'));
});
