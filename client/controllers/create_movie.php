<?php
include_once('./server/modules/movie/model/movie.php');
include_once('./server\modules\movie\useCase\createMovie\index.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $genre = $_POST["genre"];
    $age_restric = $_POST["age_restric"]; 
    $release_date = $_POST["release_date"]; 
    
    $movieToCreate = new Movie(null,$name,$genre,$age_restric,$release_date);
    
    add_movie($movieToCreate);
}

?>