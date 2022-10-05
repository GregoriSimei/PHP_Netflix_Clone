<?php
    include('./server/modules/categories/useCase/getCategories/index.php');

    function get_users_controller(?int $id) {
        return get_category($id);
    }
?>