<?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'login';

    switch ($page) {
        case 'login':
            include_once('./pages/login/index.php');
            break;
        case 'home':
            include_once('./pages/home/index.php');
            break;
        case 'outro':
            include_once('./pages/outro/index.php');
            break;
        default:
            include_once('./pages/not_found/index.php');
    }
?>