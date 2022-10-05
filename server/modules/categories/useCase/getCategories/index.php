<?php 
    include_once('./server/modules/categories/repository/category_repository.php');

    function get_category(?int $id) {
        $result = null;

        if ($id != null) {
            $result = find_by_id($id);
        } else {
            $result = find_all();
        }

        return $result;
    }
?>