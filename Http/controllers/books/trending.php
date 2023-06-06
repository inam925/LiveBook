<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$books = $db->query('select * from books order by date desc')->get();

view("books/trending.view.php", [
    'heading' => 'Our Collection',
    'books' => $books
]);
