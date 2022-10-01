<?php
    class User {
        public $id;
        public $user;
        public $email;
        public $pass;
        
        function __construct($id,$user,$email,$pass) {
            $this->id = $id;
            $this->user = $user;
            $this->email = $email;
            $this->pass = $pass;
          }
    }

?>