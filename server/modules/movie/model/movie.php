<?php
    class Movie {
        public $id;
        public $name;
        public $genre;
        public $age_restric;
        public $release_date;
        
        function __construct($id, $name,$genre,$age_restric,$release_date) {
            $this->id = $id;
            $this->name = $name;
            $this->genre = $genre;
            $this->age_restric = $age_restric;
            $this->release_date = $release_date;
          }
    }

?>