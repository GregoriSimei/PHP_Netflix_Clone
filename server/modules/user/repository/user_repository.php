<?php
    include_once(__DIR__."/../model/user.php");

    function create(User $user) {
        include("./server/database/index.php");
        $sql = $pdo->prepare("INSERT INTO users (user, email, pass) VALUES (?,?,?)");
        $sql -> execute([$user->user, $user->email, $user->pass]);
        $userFound = find_user_by_email($user->email);
        return $userFound;
    }

    function find_by_id(int $idUser) {
        include("./server/database/index.php");
        $sql = $pdo->query('SELECT * FROM users WHERE id = "'.$idUser.'" LIMIT 1');
        $userFound = $sql->fetch();
        return $userFound;
    }

    function find_all() {
        include("./server/database/index.php");
        $sql = $pdo->query('SELECT * FROM users');
        $usersFound = $sql->fetchAll();
        return $usersFound;
    }

    function update(User $user) {
        include("./server/database/index.php");
        $pdo->exec('UPDATE users SET user="'.$user->user.'", email="'.$user->email.'", pass="'.$user->pass.'" WHERE id='.$user->id);
        $userUpdated = find_by_id($user->id);
        return $userUpdated;
    }

    function remove(int $id) {
        include("./server/database/index.php");
        $pdo->exec('DELETE FROM users WHERE id = '.$id);
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