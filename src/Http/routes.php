<?php
Route::get('/', 'AunitController@index');
Route::post('/', 'AunitController@store')->name('aunit.store');

// 测试路由
Route::get('test', 'TestController@index');
