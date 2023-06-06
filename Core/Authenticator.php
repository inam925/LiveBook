<?php

namespace Core;

class Authenticator
{
    public function attempt($email, $password)
    {
        //track the user
        $user = App::resolve(Database::class)->query('select * from users where email = :email', [
            'email' => $email
        ])->find();

        //if record amtches
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $this->login([
                    'email' => $email
                ]);
                return true;
            }
        }
        //if no record found
        return false;
    }
    public function login($user)
    {
        $_SESSION['user'] = [
            'email' => $user['email']
        ];

        session_regenerate_id(true);
    }
    public function logout()
    {
        Session::destroy();
    }
}
