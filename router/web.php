<?php 
use App\Lib\Router as Route;
Route::publish("/","IndexController@index");
Route::publish("/login","AppController@login");
Route::publish("/product","AppController@login");