<?php
    include_once(__DIR__."/../model/user.php");

    function create_user(User $user) {
        include_once("./server/database/index.php");
        $sql = $pdo->prepare("INSERT INTO users (user, email, pass) VALUES (?,?,?)");
        $sql -> execute([$user->name, $user->email, $user->pass]);
        $userFound = find_user_by_email($user->email);
        return $userFound;
    }

    function find_user_by_email_and_password(string $email, string $password) {
        include_once("./server/database/index.php");
        $userFound = $pdo->query('SELECT * FROM users WHERE email = "'.$email.'" AND pass = "'.$password.'" LIMIT 1');
        return $userFound;
    }

    function find_user_by_email(string $email) {
        include_once("./server/database/index.php");
        $userFound = $pdo->query('SELECT * FROM users WHERE email = "'.$email.'" LIMIT 1');
        return $userFound;
    }
?>