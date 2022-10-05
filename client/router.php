<?php
    $page = isset($_GET["page"]) ? $_GET["page"] : "login";

    switch ($page) {
        case "login":
            include_once(__DIR__."/pages/users/login/index.php");
            break;
        case "home":
            include_once(__DIR__."/pages/home/index.php");
            break;
        case "registration":
            include_once(__DIR__."/pages/users/registration/index.php");
            break;
        case "user_list":
            include_once("./client/pages/users/user_list/index.php");
            break;
        case "deletar_user":
            include_once("./client/pages/users/delete/index.php");
            break;
        case "alterar_user":
            include_once("./client/pages/users/update/index.php");
            break;
        case "film_list":
            include_once("./client/pages/films/film_list/index.php");
            break;
        case "deletar_film":
            include_once("./client/pages/films/delete/index.php");
            break;
        case "alterar_film":
            include_once("./client/pages/films/update/index.php");
            break;
        case "include_film":
            include_once(__DIR__."/pages/films/registration/index.php");
            break;
        default:
            include_once(__DIR__."/pages/not_found/index.php");
    }
?>