<?php
    include_once("./server/modules/user/repository/user_repository.php");

    function login(string $email, string $password) {
        $userFound = find_user_by_email_and_password($email, $password);

        if(!$userFound) {
            return null;
        }

        return $userFound;
    }
?>