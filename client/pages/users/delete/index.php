<?php
    include("./client/controllers/users/get_user.php");
    include("./client/controllers/users/delete_user.php");

    $id = $_GET['id'];
    $userFound = null;

    if(isset($id)) {
        $userFound = get_users_controller($id);
    }

    if($userFound != null) {

?>
    <h1>Usuário excluido</h1>
    <b>User: </b> <?php echo $userFound["user"] ?>
    <b>Email: </b> <?php echo $userFound["email"] ?>
    <b>Pass: </b> <?php echo $userFound["pass"] ?>
<?php 
        delete_user_controller($id);
    }
?>