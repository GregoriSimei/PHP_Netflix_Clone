<?php
    include_once(__DIR__."/../config/database.php");

    $pdo = new PDO("mysql:host=".$host, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $dbname = "`".str_replace("`","``",$database)."`";
    $pdo->query("CREATE DATABASE IF NOT EXISTS $dbname");
    $pdo->query("use $dbname");
    $pdo->query("CREATE TABLE IF NOT EXISTS users (
        id int AUTO_INCREMENT NOT NULL,
        user varchar(255),
        email varchar(255),
        pass varchar(255),
        PRIMARY KEY (id)
    )");

$pdo->query("CREATE TABLE IF NOT EXISTS movies (
    id int AUTO_INCREMENT NOT NULL,
    name varchar(255),
    genre varchar(255),
    age_restric int(5),
    release_date varchar(255),
    PRIMARY KEY (id)
)");
?>