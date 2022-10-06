<?php
include('./server/modules/categories/useCase/removeCategories/index.php');

function delete_category_controller(int $id) {
    return removeCategory($id);
}

?>