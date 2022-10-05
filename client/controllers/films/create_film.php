<?php
include_once('./server/modules/film/model/film.php');
include('./server/modules/film/useCase/createFilm/index.php');

function create_film_controller(Film $film) {
    return add_film($film);
}

?>