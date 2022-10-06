<?php
include('./server/modules/film/useCase/removeFilm/index.php');

function delete_film_controller(int $id) {
    return removeFilm($id);
}

?>