<?php
    include_once("./client/controllers/login_user.php");
    include_once("./client/helpers/alert.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $pass = $_POST["password"];
        
        if(
            !empty($email) &&
            !empty($pass)
        ) {
            $userFound = login_user_controller($email, $pass);

            if(!$userFound) {
                alert_box("Usuário não existe !");
            }
            else {
                echo "
                    <script type='text/javascript'>
                        window.location = 'http://localhost/netflix/?page=home'
                    </script>
                ";
            }
        }
        else {
            alert_box("Preencha os campos corretamente !");
        }
        
    }
?>

<div class="login_banner">
    <div class="login_banner_filter"></div>
    <div class="login_div_form">
        <div class="login_form_title">
            Entrar
        </div>
        <form class="login_form" method="post">
            <input class="login_form_input" type="text" name="email" placeholder="email"/>
            <div class="login_div_spacer"></div>
            <input class="login_form_input" type="password" name="password" placeholder="senha"/>
            <div class="login_div_spacer"></div>
            <input class="login_form_button" type="submit">LOGIN</button>
        </form>
        <div class="login_form_actions">
            <a href='?page=registration' style='text-decoration: none; color: white;'>Criar conta</a>
        </div>
    </div>
</div>