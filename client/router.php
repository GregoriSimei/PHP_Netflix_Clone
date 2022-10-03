<?php
    $page = isset($_GET["page"]) ? $_GET["page"] : "login";

    switch ($page) {
        case "login":
            include_once(__DIR__."/pages/login/index.php");
            break;
        case "category":
            include_once(__DIR__."/pages/category/index.php");
            break;
        case "movie":
            include_once(__DIR__."/pages/movie/index.php");
            break;
        // case "edit_movie":
        //     include_once(__DIR__."/pages/movie/edit_movie.php");
        //     break;
        case "create_movie":
            include_once(__DIR__."/pages/movie/create_movie.php");
            break;
        case "home":
            include_once(__DIR__."/pages/home/index.php");
            break;
        case "registration":
            include_once(__DIR__."/pages/registration/index.php");
            break;
        default:
            include_once(__DIR__."/pages/not_found/index.php");
    }
?>