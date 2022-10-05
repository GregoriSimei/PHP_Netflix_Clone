<?php
    include_once("./server/modules/film/model/film.php");
    include_once('./server/modules/film/repository/film_repository.php');

    function updateFilm(FIlm $film) {
        $filmFound = find_by_id($film->id);

        if($filmFound != null) {
            return update($film);
        } else {
            return null;
        }
    }
?>