<?php 
    include_once('./server/modules/user/repository/user_repository.php');

    function get_users(?int $id) {
        $result = null;

        if ($id != null) {
            $result = find_by_id($id);
        } else {
            $result = find_all();
        }

        return $result;
    }
?>