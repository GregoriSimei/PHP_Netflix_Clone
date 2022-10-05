<?php
    include("./client/controllers/films/create_film.php");
    include("./client/helpers/alert.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $year = $_POST["year"];
        $duration = $_POST["duration"];
        $rating = $_POST["rating"];
        $description = $_POST["description"];
        $categoryId = $_POST["categoryId"];

        if (
            !empty($name) &&
            !empty($year) &&
            !empty($duration) &&
            !empty($rating) &&
            !empty($description) &&
            !empty($categoryId)
        ) {
            $filmToCreate = new Film();
            $filmToCreate->name = $name;
            $filmToCreate->year = $year;
            $filmToCreate->duration = $duration;
            $filmToCreate->rating = $rating;
            $filmToCreate->description = $description;
            $filmToCreate->categoryId = $categoryId;
            
            $filmCreated = create_film_controller($filmToCreate);

            if(!$filmCreated) {
                alert_box("Filme já existe !");
            }
            else {
                alert_box("Filme criado com sucesso !");
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
            <input class="registration_form_input" type="text" name="name" placeholder="nome do filme"/>
            <div class="registration_div_spacer"></div>
            <input class="registration_form_input" type="text" name="year" placeholder="year"/>
            <div class="registration_div_spacer"></div>
            <input class="registration_form_input" type="text" name="duration" placeholder="duration"/>
            <div class="registration_div_spacer"></div>
            <input class="registration_form_input" type="text" name="rating" placeholder="rating"/>
            <div class="registration_div_spacer"></div>
            <input class="registration_form_input" type="text" name="description" placeholder="descricao"/>
            <div class="registration_div_spacer"></div>
            <input class="registration_form_input" type="text" name="categoryId" placeholder="categoria"/>
            <div class="registration_div_spacer"></div>
            <input class="registration_form_button" type="submit"/>
        </form>
    </div>
</div>