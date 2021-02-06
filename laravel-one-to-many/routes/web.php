<?php

use Illuminate\Support\Facades\Route;

Route::get('/emps', 'MainController@empIndex')
-> name('emps-index');
Route::get('/emp/{id}', 'MainController@empShow')
-> name('emp-show');
