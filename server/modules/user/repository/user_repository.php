<?php
    include_once(__DIR__."/../model/user.php");

    function create_user(User $user) {
        include_once(__DIR__."/../../../database/index.php");

        $sql = $pdo -> prepare("INSERT INTO users (user, email, pass) VALUES (?,?,?)");
        $ql -> execute($user);

        $lastId = get_last_inserted();


    }

    function get_user_by_id() {
        
    }

    function get_last_inserted() {
        include_once(__DIR__."/../../../database/index.php");
        return $pdo -> lastInsertId();
    }
?>