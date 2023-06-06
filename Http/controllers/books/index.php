<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$books = $db->query('select * from books order by date desc')->get();

view("books/index.view.php", [
    'heading' => 'My Books',
    'books' => $books
]);
