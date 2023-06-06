<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$book = $db->query('select * from books where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

$db->query('delete from books where id = :id', [
    'id' => $_POST['id']
]);

redirect('/books');
exit();
