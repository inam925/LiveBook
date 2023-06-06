<?php

//log out the user

use Core\Authenticator;

(new Authenticator)->logout();

redirect('/');
exit();
