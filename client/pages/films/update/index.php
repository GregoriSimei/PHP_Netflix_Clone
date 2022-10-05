<?php
    include("./client/controllers/films/get_film.php");
    include("./client/controllers/films/update_film.php");
    include("./client/helpers/alert.php");

    $id = $_GET['id'];
    $filmFound = null;

    if(isset($id)) {
        $filmFound = get_films_controller($id);
    }

    if($filmFound != null) {

?>
    <form method="post" name="user_teste">
        <label>Name</label>
        <input type="text" name="name" placeholder="<?php echo $filmFound["name"] ?>"/>

        <label>Year</label>
        <input type="text" name="year" placeholder="<?php echo $filmFound["year"] ?>"/>

        <label>duration</label>
        <input type="text" name="duration" placeholder="<?php echo $filmFound["duration"] ?>"/>

        <label>rating</label>
        <input type="text" name="rating" placeholder="<?php echo $filmFound["rating"] ?>"/>

        <label>description</label>
        <input type="text" name="description" placeholder="<?php echo $filmFound["description"] ?>"/>

        <label>categoryId</label>
        <input type="text" name="categoryId" placeholder="<?php echo $filmFound["categoryId"] ?>"/>

        <input value="Atualizar" type="submit"/>
    </form>
<?php 
    }
?>

<?php
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
            $filmToUpdate = new Film();
            $filmToUpdate->id = $id;
            $filmToUpdate->name = $name;
            $filmToUpdate->year = $year;
            $filmToUpdate->duration = $duration;
            $filmToUpdate->rating = $rating;
            $filmToUpdate->description = $description;
            $filmToUpdate->categoryId = $categoryId;
            
            $filmCreated = update_film_controller($filmToUpdate);

            if(!$filmCreated) {
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