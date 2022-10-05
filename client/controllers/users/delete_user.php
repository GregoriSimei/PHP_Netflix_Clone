<?php
include('./server/modules/user/useCase/removeUser/index.php');

function delete_user_controller(int $id) {
    return removeUser($id);
}

?>