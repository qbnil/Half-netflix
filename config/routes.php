<?php

return [
    '/home' => function () {
        include_once APP_PATH.'/templates/pages/home.php';
    },
    '/movies' => function () {
        include_once APP_PATH.'/templates/pages/movies.php';
    },
];
