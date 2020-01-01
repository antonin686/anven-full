<?php
Route::get('/', 'Index>index');
Route::get('/login', 'Login>index');
Route::get('/register', 'Login>register');
Route::get('/home', 'HomeController>index');
Route::post('/register/post', 'Login>addToregister');
Route::post('/login/post', 'Login>verifyUser');


