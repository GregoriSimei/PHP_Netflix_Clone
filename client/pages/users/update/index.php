<?php
    include("./client/controllers/users/get_user.php");
    include("./client/controllers/users/update_user.php");
    include("./client/helpers/alert.php");

    $id = $_GET['id'];
    $userFound = null;

    if(isset($id)) {
        $userFound = get_users_controller($id);
    }

    if($userFound != null) {

?>
    <form method="post" name="user_teste">
        <label>User</label>
        <input type="text" name="user" placeholder="<?php echo $userFound["user"] ?>"/>

        <label>User</label>
        <input type="email" name="email" placeholder="<?php echo $userFound["email"] ?>"/>

        <label>User</label>
        <input type="password" name="password" placeholder="<?php echo $userFound["pass"] ?>"/>

        <input value="Atualizar" type="submit"/>
    </form>
<?php 
    }
?>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = $_POST["user"];
        $email = $_POST["email"];
        $pass = $_POST["password"];

        if (
            !empty($user) &&
            !empty($email) &&
            !empty($pass)
        ) {
            $userToUpdate = new User();
            $userToUpdate->id = $id;
            $userToUpdate->user = $user;
            $userToUpdate->email = $email;
            $userToUpdate->pass = $pass;
            
            $userCreated = update_user_controller($userToUpdate);

            if(!$userCreated) {
                alert_box("Usuário não existe !");
            }
            else {
                alert_box("Usuário alterado com sucesso !");
            }
        }
        else {
            alert_box("Preencha os campos corretamente !");
        }
    
    }
?>