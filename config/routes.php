<?php

use App\RouteHandler\Route;

return [
    Route::get('/home', function () {
        include_once APP_PATH.'/templates/pages/home.php';
    }),
    Route::get('/movies', function () {
        include_once APP_PATH.'/templates/pages/movies.php';
    }),
];
