<?php
    include('./server/modules/film/useCase/getFilm/index.php');

    function get_films_controller(?int $id) {
        return get_films($id);
    }
?>