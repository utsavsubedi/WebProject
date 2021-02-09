<?php 

    class Dbh {
        public $conn;

        public function __construct() {
            $this->conn = mysqli_connect('localhost', 'root', '', 'daraz');
            if(!$this->conn){
                echo mysqli_connect_error();
            }
        }
    }




