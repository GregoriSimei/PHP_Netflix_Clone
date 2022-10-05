<?php
    include_once('./server/modules/user/model/user.php');
    include('./server/modules/user/useCase/updateUser/index.php');

    function update_user_controller(User $user) {
        $userUpdated = updateUser($user);

        return $userUpdated;
    }
?>