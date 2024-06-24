<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/




Route::get('/', 'App\Http\Controllers\ControlAssign@first');
Route::get('Aboutus', 'App\Http\Controllers\ControlAssign@aboutus');
