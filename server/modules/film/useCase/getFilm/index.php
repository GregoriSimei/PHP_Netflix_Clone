<?php 
    include_once('./server/modules/film/repository/film_repository.php');

    function get_films(?int $id) {
        $result = null;

        if ($id != null) {
            $result = find_by_id($id);
        } else {
            $result = find_all();
        }

        return $result;
    }
?>