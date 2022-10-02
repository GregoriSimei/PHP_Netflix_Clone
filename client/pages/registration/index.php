<?php
    include_once("./client/controllers/create_user.php");
    include_once("./client/helpers/alert.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = $_POST["user"];
        $email = $_POST["email"];
        $pass = $_POST["password"];

        if (
            !empty($user) &&
            !empty($email) &&
            !empty($pass)
        ) {
            $userToCreate = new User();
            $userToCreate->name = $user;
            $userToCreate->email = $email;
            $userToCreate->pass = $pass;
            
            $userCreated = create_user_controller($userToCreate);

            if(!$userCreated) {
                alert_box("Usuário já existe !");
            }
            else {
                alert_box("Usuário criado com sucesso !");
            }
        }
        else {
            alert_box("Preencha os campos corretamente !");
        }
    
    }
?>

<div class="registration_banner">
    <div class="registration_banner_filter"></div>
    <div class="registration_div_form">
        <div class="registration_form_title">
            Cadastrar
        </div>
        <form class="registration_form" method="post" name="user_teste">
            <input class="registration_form_input" type="text" name="user" placeholder="usuario"/>
            <div class="registration_div_spacer"></div>
            <input class="registration_form_input" type="email" name="email" placeholder="email"/>
            <div class="registration_div_spacer"></div>
            <input class="registration_form_input" type="password" name="password" placeholder="senha"/>
            <div class="registration_div_spacer"></div>
            <input class="registration_form_button" type="submit"/>
        </form>
        <div class="registration_form_actions">
            <a href='?page=login' style='text-decoration: none; color: white;'>Entrar na conta</a>
        </div>
    </div>
</div>