<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);


$book = $db->query('select * from books where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

view("books/show.view.php", [
    'heading' => $book['name'],
    'book' => $book
]);
