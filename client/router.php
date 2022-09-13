<?php
    $page = isset($_GET["page"]) ? $_GET["page"] : "login";

    switch ($page) {
        case "login":
            include_once(__DIR__."/pages/login/index.php");
            break;
        case "home":
            include_once(__DIR__."/pages/home/index.php");
            break;
        case "outro":
            include_once(__DIR__."/pages/outro/index.php");
            break;
        default:
            include_once(__DIR__."/pages/not_found/index.php");
    }
?>