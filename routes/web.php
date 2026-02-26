<?php

use Illuminate\Support\Facades\Route;

	Route::get('/post', ['App\\Http\\Controllers\\PostController', 'show']);
?>
