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
        default:
            include_once(__DIR__."/pages/not_found/index.php");
    }
?>