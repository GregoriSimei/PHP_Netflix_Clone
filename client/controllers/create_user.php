<?php
include_once('./server/modules/user/model/user.php');
include_once('./server/modules/user/useCase/createUser/index.php');

<<<<<<< HEAD
function create_user_controller(User $user) {
    return add_user($user);
=======
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["user"];
    $email = $_POST["email"];
    $pass = $_POST["password"]; 
    
    $userToCreate = new User(null,$user,$email,$pass);
    
    add_user($userToCreate);
    
>>>>>>> 1bfa35b3a14bff54701fc186ef040657495347d5
}

?>