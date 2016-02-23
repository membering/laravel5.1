<?php

Route::group(['prefix' => 'admin', 'namespace' => 'Modules\Backend\Http\Controllers'], function()
{
	Route::get('/', 'BackendController@index');
});