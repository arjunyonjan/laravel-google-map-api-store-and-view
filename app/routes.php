<?php

Route::get('vendor/add', function()
{
	//view
	return View::make('add');
});





Route::post('vendor/add', function(){

	Vendor::create(Input::all());

	var_dump('vendor is added....');

});




Route::get('vendor/{id}',function($id){

	$vendor = Vendor::find($id);

	return View::make('vendor',compact('vendor'));

});