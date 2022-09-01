<?php
    include_once(__DIR__.'/colors/Dark.php');
    include_once(__DIR__.'/colors/Light.php');

    function getTheme() {
        $themes = array(
            'dark' => new Dark(),
            'light' => new Light(),
        );

        $themeRef = isset($_GET['theme']) ? $_GET['theme'] : 'dark';
        
        return $themes[$themeRef];
    }
    
?>