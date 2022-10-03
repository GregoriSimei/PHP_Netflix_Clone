<?php
    include_once(__DIR__."/../model/movie.php");

    function create_movie(Movie $movie) {
        try {
        include_once("./server/database/index.php");
        $sql = $pdo->prepare("INSERT INTO movies (name, genre, age_restric, release_date) VALUES (?,?,?,?)");
        $sql -> execute([$movie->name, $movie->genre, $movie->age_restric, $movie->release_date]);
        $_SESSION['message'] = "Filme cadastrado !"; 
    } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
function list_all_movies(){
    try {
        include_once("./server/database/index.php");
        $query = $pdo->query("SELECT  * FROM movies;");
        $movies_array = array();

        while ($linha = $query->fetch(PDO::FETCH_ASSOC)) {
            $movieToCreate = new Movie($linha['id'],$linha['name'],$linha['genre'],$linha['age_restric'], $linha['release_date']);
            array_push($movies_array, $movieToCreate);
        }
        return $movies_array;
        // echo $sql->rowCount();
    } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }

    }

    function select_movie($id){
        echo "chamou";
        try {
            include_once("./server/database/index.php");
            $stmt = $pdo->prepare("SELECT * FROM movies WHERE id=?");
            $stmt->execute([$id]); 
            $movie = $stmt->fetch();
            echo "aqui";
            var_dump($movie);
            // $userObj = new User($user['id'],$user['user'],$user['email'],$user['pass']);
            // return $userObj;
        } catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    
        }

        function update_movie(Movie $movieToUpdate){
            include_once("./server/database/index.php");

            if (isset($_GET['edit'])) {
                $id = $_GET['edit'];
                $stmt = $pdo->prepare('UPDATE movies SET name = :name, genre = :genre, age_restric = :age_restric, release_date =:release_date  WHERE id = :id');
                $stmt->execute(array(
                  ':id'   => $id,
                  ':name' => $movieToUpdate->name,
                  ':genre' => $movieToUpdate->genre,
                  ':age_restric' => $movieToUpdate->age_restric,
                  ':release_date' => $movieToUpdate->release_date
                ));
        
                echo $stmt->rowCount();
                $movie = $stmt->fetch();
                return $movie;
                
            }
        }

        function delete_movie($id){
            include_once("./server/database/index.php");
            try {
              $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
              $stmt = $pdo->prepare('DELETE FROM movies WHERE id = :id');
              $stmt->bindParam(':id', $id);
              $stmt->execute();
            
              echo $stmt->rowCount();
              return $stmt;
            } catch(PDOException $e) {
              echo 'Error: ' . $e->getMessage();
            }
        }


?>