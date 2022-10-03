<?php
    include_once("./client/controllers/create_user.php")
?>

<div class="registration_banner">
    <div class="registration_banner_filter"></div>
    <div class="registration_div_form">
        <div class="registration_form_title">
            Cadastrar categoria
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
            <?php 
            if (isset($_SESSION['message'])): ?>
                <div class="registration_form_actions">
                    <?php
                        echo $_SESSION['message']; 
                        unset($_SESSION['message']);
                    ?>
                </div>
            <?php endif ?>
        </div>

    </div>
</div>