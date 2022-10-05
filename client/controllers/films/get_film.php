<?php
    include('./server/modules/user/useCase/getUser/index.php');

    function get_users_controller(?int $id) {
        return get_users($id);
    }
?>