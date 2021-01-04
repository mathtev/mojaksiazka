<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Router::get('', 'DefaultController');
Router::get('authors', 'DefaultController');
Router::get('books', 'BookController');
Router::get('lists', 'DefaultController');
Router::get('user', 'DefaultController');
Router::post('login', 'SecurityController');
Router::post('addBook', 'BookController');
Router::post('register', 'SecurityController');
Router::post('search', 'BookController');

Router::run($path);

