<?php
    include_once("./server/modules/user/model/user.php");
    include_once('./server/modules/user/repository/user_repository.php');

    function updateUser(User $user) {
        $userFound = find_by_id($user->id);

        if($userFound != null) {
            return update($user);
        } else {
            return null;
        }
    }
?>