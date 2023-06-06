<?php

$router->get('/', 'index.php');
$router->get('/about', 'about.php');
$router->get('/trending', 'books/trending.php');
//book
$router->get('/books', 'books/index.php')->only('auth');
$router->get('/book', 'books/show.php');

$router->delete('/book', 'books/destroy.php');
$router->get('/book/edit', 'books/edit.php');
$router->patch('/book', 'books/update.php');

$router->get('/books/create', 'books/create.php');
$router->post('/books', 'books/store.php');

$router->get('/register', 'registration/create.php')->only('guest');
$router->post('/register', 'registration/store.php')->only('guest');

$router->get('/login', 'session/create.php')->only('guest');
$router->post('/session', 'session/store.php')->only('guest');
$router->delete('/session', 'session/destroy.php')->only('auth');
