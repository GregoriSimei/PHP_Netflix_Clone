<?php
    include_once('./server/modules/film/model/film.php');
    include('./server/modules/film/useCase/updateFilm/index.php');

    function update_film_controller(Film $film) {
        $filmUpdated = updateFilm($film);

        return $filmUpdated;
    }
?>