<?php
    include_once("./client/controllers/create_movie.php")
?>

<div class="registration_banner">
    <div class="registration_banner_filter"></div>
    <div class="registration_div_form">
        <div class="registration_form_title">
            Cadastrar filme
        </div>
        <form class="registration_form" method="post" name="movie">
            <input class="registration_form_input" type="text" name="name" placeholder="Titulo / Nome"/>
            <div class="registration_div_spacer"></div>
            <input class="registration_form_input" type="text" name="genre" placeholder="gênero"/>
            <div class="registration_div_spacer"></div>
            <input class="registration_form_input" type="number" name="age_restric" placeholder="idade recomendada"/>
            <div class="registration_div_spacer"></div>
            <input class="registration_form_input" type="date" name="release_date" placeholder="data de lançamento"/>
            <div class="registration_div_spacer"></div>
            <input class="registration_form_button" type="submit"/>
        </form>
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