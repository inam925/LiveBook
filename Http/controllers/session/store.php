<?php

use Core\Authenticator;
use Http\Forms\LoginForm;

$attributes = [
    'email' => $_POST['email'],
    'password' => $_POST['password'],
];
//validate form inputs
$form = LoginForm::validate($attributes);

//match the credentials
$signedIn = (new Authenticator())->attempt($attributes['email'], $attributes['password']);

if (!$signedIn) {
    $form->error('email', 'No matching record found in the database')
        ->throw();
}

redirect('/');
