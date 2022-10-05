<?php
include('./server/modules/categories/useCase/removeUser/index.php');

function delete_category_controller(int $id) {
    return removeUser($id);
}

?>