<?php


Route::get('/', function () {
    return view('main');
});

Route::get('/admin' ,function(){
    return view('admin');
});
