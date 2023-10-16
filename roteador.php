<?php

Route::get('/', '/pages/home.html', '');
Route::get('/register', '/pages/register.html', '');
Route::get('/login', '/pages/login.html', '');
Route::get('/dashboard', '/pages/dashboard.php', '');

Route::post('/signup', '/controllers/signup.php', '');
Route::post('/signin', '/controllers/signin.php', '');

?>