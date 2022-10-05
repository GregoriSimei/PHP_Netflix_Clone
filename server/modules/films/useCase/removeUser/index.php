<?php
    include_once('./server/modules/user/repository/user_repository.php');

    function removeUser(int $id) {
        remove($id);
    }
?>