<?php


Route::get('/', 'SehifeController@index');

Route::get('/admin' ,'SehifeController@admin');

Route::get('/admin/slides' , ['uses'=>'SehifeController@slides' , 'as'=>'slides']);

Route::post('/admin/slides/update/{id}' , 'SlideController@update');

Route::post('/admin/slides/add' , 'SlideController@store');

Route::get('/admin/slides/delete/{id}', 'SlideController@destroy');

Route::get('/admin/spacer1' , ['uses' => 'SehifeController@spacer1' , 'as'=>'spacer1']);

Route::post('/admin/spacer1/update/{id}' , 'SpacerController@update_spacer1');

Route::get('/admin/who_we_are/' , ['uses'=>'SehifeController@whoweare', 'as'=>'whoweare']);
Route::post('/admin/who_we_are/update/{id}' , 'WhoWeAreController@update_yazilar');
Route::get('/admin/who_we_are/staff/delete/{id}' , 'WhoWeAreController@delete_staff_member');
Route::post('/admin/who_we_are/staff/update/{id}' , 'WhoWeAreController@update_staff_member');
Route::post('/admin/who_we_are/staff/add', 'WhoWeAreController@add_staff_member');
