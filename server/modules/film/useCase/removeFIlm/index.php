<?php
    include_once('./server/modules/film/repository/film_repository.php');

    function removeFilm(int $id) {
        remove($id);
    }
?>