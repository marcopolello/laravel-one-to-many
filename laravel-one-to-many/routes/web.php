<?php

use Illuminate\Support\Facades\Route;

// rotte per Employees
Route::get('/emps', 'MainController@empIndex')
-> name('emps-index');
Route::get('/emp/{id}', 'MainController@empShow')
-> name('emp-show');

// rotte per Tasks
Route::get('/tasks', 'MainController@taskIndex')
-> name('tasks-index');
Route::get('/task/{id}', 'MainController@taskShow')
-> name('task-show');
// CREATE
Route::get('/create/task','MainController@taskCreate')
-> name('task-create');
Route::post('/store/task','MainController@taskStore')
-> name('task-store');
// EDIT
Route::get('/edit/task/{id}', 'MainController@taskEdit')
-> name('task-edit');
Route::post('/update/task/{id}','MainController@taskUpdate')
-> name('task-update');

// rotte per Locations
Route::get('/locations', 'MainController@locationIndex')
-> name('location-index');
Route::get('/location/{id}', 'MainController@locationShow')
-> name('location-show');

// rotte per Typologies
Route::get('/typologies', 'MainController@typIndex')
-> name('typs-index');
Route::get('/typ/{id}', 'MainController@typShow')
-> name('typ-show');
