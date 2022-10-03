<?php
    include_once(__DIR__."/../../repository/movie_repository.php");

    function add_movie(Movie $movie) {
        create_movie($movie);
    }
    function select_all_movies(){
        return list_all_movies();
    }
    // function select_all_users(){
    //     return list_all_users();
    // }
    // function funcaobesta(){
    //     echo "funcaobesta";
    // }
    function select_movie_by_id($id){
        return select_movie($id);
    }
?>