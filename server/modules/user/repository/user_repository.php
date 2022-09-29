<?php
    include_once(__DIR__."/../model/user.php");

    function create_user(User $user) {
        include_once("./server/database/index.php");
        $sql = $pdo->prepare("INSERT INTO users (user, email, pass) VALUES (?,?,?)");
        $sql -> execute([$user->name, $user->email, $user->pass]);
    }
?>