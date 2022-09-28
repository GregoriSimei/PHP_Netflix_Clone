<?php
    include_once(__DIR__."/../../repository/user_repository.php");

    function add_user(User $user) {
        create_user($user);
    }
?>