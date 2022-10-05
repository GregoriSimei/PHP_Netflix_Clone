<?php
    include_once('./server/modules/categories/repository/category_repository.php');

    function removeCategory(int $id) {
        remove($id);
    }
?>