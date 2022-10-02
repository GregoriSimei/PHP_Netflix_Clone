<?php
include_once('./server/modules/user/model/user.php');
include_once('./server/modules/user/useCase/createUser/index.php');

function create_user_controller(User $user) {
    return add_user($user);
}

?>