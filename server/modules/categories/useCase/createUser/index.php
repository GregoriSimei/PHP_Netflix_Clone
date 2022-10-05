<?php
    include_once(__DIR__."/../../repository/user_repository.php");

    function add_user(User $user) {
        $userFound = find_user_by_email($user->email);

        if (!$userFound) {
            return create($user);
        }

        return null;
    }
?>