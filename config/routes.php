<?php

//use App\Router\Route;

return [
   '/home' => function() {
      include_once __DIR__ . '/../views/pages/home.php';
   },
   '/movies' => function() {
      include_once __DIR__ . '/../views/pages/movies.php';
   },
   //Route::get('/home', function () {
      //include_once APP_PATH.'/views/pages/home.php';
   //}),
   //Route::get('/movies', function () {
      //include_once APP_PATH.'/views/pages/movies.php';
   //}),
];
?>