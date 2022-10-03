<?php
    include_once(__DIR__."/../../repository/user_repository.php");

    function add_user(User $user) {
        $userFound = find_user_by_email($user->email);

        if (!$userFound) {
            return create_user($user);
        }

        return null;
    }
    function select_all_users(){
        return list_all_users();
    }
    function funcaobesta(){
        echo "funcaobesta";
    }
    function select_user_by_id($id){
        echo "chegou aqui";
        return select_user($id);
    }
?>