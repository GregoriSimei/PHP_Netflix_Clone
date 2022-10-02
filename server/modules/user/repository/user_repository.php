<?php
    include_once(__DIR__."/../model/user.php");

    function create_user(User $user) {
        include("./server/database/index.php");
        $sql = $pdo->prepare("INSERT INTO users (user, email, pass) VALUES (?,?,?)");
        $sql -> execute([$user->name, $user->email, $user->pass]);
        $userFound = find_user_by_email($user->email);
        return $userFound;
    }

    function find_user_by_email_and_password(string $email, string $passUser) {
        include("./server/database/index.php");
        $sql = $pdo->query('SELECT * FROM users WHERE email = "'.$email.'" AND pass = "'.$passUser.'" LIMIT 1');
        $userFound = $sql->fetch();
        return $userFound;
    }

    function find_user_by_email(string $email) {
        include("./server/database/index.php");
        $sql = $pdo->query('SELECT * FROM users WHERE email = "'.$email.'" LIMIT 1');
        $userFound = $sql->fetch();
        return $userFound;
    }
?>