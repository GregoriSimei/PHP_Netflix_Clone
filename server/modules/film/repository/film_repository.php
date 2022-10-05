<?php
    include_once(__DIR__."/../model/film.php");

    function create(Film $film) {
        include("./server/database/index.php");
        $sql = $pdo->prepare("INSERT INTO films (name, year, duration, rating, description, categoryId) VALUES (?,?,?,?,?,?)");
        $sql -> execute([$film->name, $film->year, $film->duration, $film->rating, $film->description, $film->categoryId]);
        $filmFound = find_film_by_name($film->name);
        return $filmFound;
    }

    function find_by_id(int $idFilm) {
        include("./server/database/index.php");
        $sql = $pdo->query('SELECT * FROM films WHERE id = "'.$idFilm.'" LIMIT 1');
        $filmFound = $sql->fetch();
        return $filmFound;
    }

    function find_all() {
        include("./server/database/index.php");
        $sql = $pdo->query('SELECT * FROM films');
        $filmsFound = $sql->fetchAll();
        return $filmsFound;
    }

    function update(Film $film) {
        include("./server/database/index.php");
        $pdo->exec('UPDATE films SET name="'.$film->name.'", year="'.$film->year.'", duration="'.$film->duration.'", rating="'.$film->rating.'", description="'.$film->description.'", categoryId="'.$film->categoryId.'" WHERE id='.$film->id);
        $filmUpdated = find_by_id($film->id);
        return $filmUpdated;
    }

    function remove(int $id) {
        include("./server/database/index.php");
        $pdo->exec('DELETE FROM films WHERE id = '.$id);
    }

/*     function find_user_by_email_and_password(string $email, string $passUser) {
        include("./server/database/index.php");
        $sql = $pdo->query('SELECT * FROM users WHERE email = "'.$email.'" AND pass = "'.$passUser.'" LIMIT 1');
        $userFound = $sql->fetch();
        return $userFound;
    } */

    function find_film_by_name(string $name) {
        include("./server/database/index.php");
        $sql = $pdo->query('SELECT * FROM films WHERE name = "'.$name.'" LIMIT 1');
        $filmFound = $sql->fetch();
        return $filmFound;
    }
?>