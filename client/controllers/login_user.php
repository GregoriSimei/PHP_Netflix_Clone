<?php
include_once('./server/modules/user/useCase/login/index.php');

function login_user_controller(string $email, string $password) {
    return login($email, $password);
}

?>