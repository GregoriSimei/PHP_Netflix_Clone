<?php
include_once('./server/modules/user/model/user.php');
include_once('./server/modules/user/useCase/createUser/index.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["user"];
    $email = $_POST["email"];
    $pass = $_POST["password"]; 
    
    $userToCreate = new User();
    $userToCreate->name = $user;
    $userToCreate->email = $email;
    $userToCreate->pass = $pass;
    
    add_user($userToCreate);
}
?>