<?php
    include_once(__DIR__."/../config/database.php");

    $pdo = new PDO(
        "mysql:host=".$host."; dbname=".$database."",
        $username,
        $password,
    );

    echo "DB_INFO </br>";
    echo "</br>Host: ".$host;
    echo "</br>Database: ".$database;
    echo "</br>Username: ".$username;
    echo "</br>Password: ".$password;
?>