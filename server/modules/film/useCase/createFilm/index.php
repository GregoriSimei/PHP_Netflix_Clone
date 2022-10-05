<?php
    include_once(__DIR__."/../../repository/film_repository.php");

    function add_film(Film $film) {
        $filmFound = find_film_by_name($film->name);

        if (!$filmFound) {
            return create($film);
        }

        return null;
    }
?>