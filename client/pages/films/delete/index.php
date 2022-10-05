<?php
    include("./client/controllers/films/get_film.php");
    include("./client/controllers/films/delete_film.php");

    $id = $_GET['id'];
    $filmFound = null;

    if(isset($id)) {
        $filmFound = get_films_controller($id);
    }

    if($filmFound != null) {

?>
    <h1>Filme excluido</h1>
    <b>Nome: </b> <?php echo $filmFound["name"] ?>
    <b>Year: </b> <?php echo $filmFound["year"] ?>
    <b>Duration: </b> <?php echo $filmFound["duration"] ?>
    <b>Rating: </b> <?php echo $filmFound["rating"] ?>
    <b>Description: </b> <?php echo $filmFound["description"] ?>
    <b>Category: </b> <?php echo $filmFound["categoryId"] ?>
<?php 
        delete_film_controller($id);
    }
?>