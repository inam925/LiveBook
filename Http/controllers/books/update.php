<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

//find the corresponding book
$book = $db->query('select * from books where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

// validate the form
$errors = [];

if (!Validator::string($_POST['name'], 1, 1000)) {
    $errors['name'] = 'A name of no more than 1,000 characters is required.';
}
if (!Validator::string($_POST['author'], 1, 50)) {
    $errors['author'] = 'Author\'s name of no more than 50 characters is required.';
}

// if no validate errors, update the record in books database table.
if (count($errors)) {
    return view(('books/edit.view.php'), [
        'heading' => 'Edit book',
        'errors' => $errors,
        'book' => $book
    ]);
}

$db->query('update books set name = :name, author = :author, status = :status, date = :date, description = :description, image = :image where id = :id', [
    'id' => $_POST['id'],
    'name' => $_POST['name'],
    'author' => $_POST['author'],
    'status' => $_POST['status'],
    'date' => $_POST['date'],
    'description' => $_POST['description'],
    'image' => $_POST['image'],
]);

// redirect the user
redirect('/books');
die();
