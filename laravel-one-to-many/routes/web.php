<?php

use Illuminate\Support\Facades\Route;

// rotte per Employees
Route::get('/emps', 'MainController@empIndex')
-> name('emps-index');
Route::get('/emp/{id}', 'MainController@empShow')
-> name('emp-show');

Route::get('/tasks', 'MainController@taskIndex')
-> name('tasks-index');
Route::get('/task/{id}', 'MainController@taskShow')
-> name('task-show');
