<?php
    include("./server/database/index.php");

    $pdo->query("CREATE TABLE IF NOT EXISTS users (
        id int AUTO_INCREMENT NOT NULL,
        user varchar(255),
        email varchar(255),
        pass varchar(255),
        PRIMARY KEY (id)
    )");

    $pdo->query("CREATE TABLE IF NOT EXISTS categories (
        categoryId int AUTO_INCREMENT NOT NULL PRIMARY KEY,
        name varchar(255),
        description varchar(255)
    )");

    $pdo->query("CREATE TABLE IF NOT EXISTS films (
        id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
        name varchar(255),
        year int,
        duration int,
        rating int,
        description varchar(255),
        categoryId int NOT NULL,
        CONSTRAINT FK_Child_Parent FOREIGN KEY (categoryId)     
            REFERENCES categories (categoryId)
    )");
?>