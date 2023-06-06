<?php

use Core\Validator;
use Core\App;
use Core\Database;

$email = $_POST['email'];
$password = $_POST['password'];

//validate form inputs
$errors = [];
if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address.';
}
if (!Validator::string($password, 7, 255)) {
    $errors['password'] = 'Please provide a password of at least seven characters.';
}
if (!empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}

$db = App::resolve(Database::class);
// check if account already eists
$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

if ($user) {
    //account already registered
    //if yes, redirect to a login page
    redirect('/');
    exit();
} else {
    //if no, save one to database
    $db->query('INSERT INTO users(email, password) VALUES(:email, :password)', [
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);
    //log in the user and redirect
    $this->login([
        'email' => $email
    ]);

    redirect('/');
    exit();
}
