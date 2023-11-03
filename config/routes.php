<?php

return [
    '/home' => function () {
        include_once __DIR__.'/../templates/pages/home.php';
    },
    '/movies' => function () {
        include_once __DIR__.'/../templates/pages/movies.php';
    },
];
