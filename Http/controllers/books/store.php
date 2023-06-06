<?php

use Core\Validator;
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$errors = [];

if (!Validator::string($_POST['name'], 1, 1000)) {
    $errors['name'] = 'A name of no more than 1,000 characters is required.';
}
if (!Validator::string($_POST['author'], 1, 50)) {
    $errors['author'] = 'Author\'s name of no more than 50 characters is required.';
}

if (!empty($errors)) {
    //validation issues
    return view("books/create.view.php", [
        'heading' => 'Create Book',
        'errors' => $errors
    ]);
}

if (empty($errors)) {
    $db->query('INSERT INTO books(name, author, status, date, description, image) VALUES(:name, :author, :status, :date, :description, :image)', [
        'name' => $_POST['name'],
        'author' => $_POST['author'],
        'status' => $_POST['status'],
        'date' => $_POST['date'],
        'description' => $_POST['description'],
        'image' => $_POST['image'],
    ]);
    redirect('/books');
    die();
}
