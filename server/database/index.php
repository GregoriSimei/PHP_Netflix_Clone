<?php
    include(__DIR__."/../config/database.php");

    $pdo = new PDO("mysql:host=".$host, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $dbname = "`".str_replace("`","``",$database)."`";
    $pdo->query("CREATE DATABASE IF NOT EXISTS $dbname");

    $pdo->query("use $dbname");
?>