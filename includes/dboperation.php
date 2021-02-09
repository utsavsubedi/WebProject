<?php 
    include 'db.php';

    class CrudOperation extends Dbh{
        
        public $update = false;
        public $array=[];
        //method for inserting records
        public function insert_record($table_name,$data){

            $sql = "";
            $sql .= "INSERT INTO ". $table_name;
            $sql .= " (".implode(",", array_keys($data)).") VALUES ";
            $sql .= "('".implode("','", array_values($data))."')";
            $query = mysqli_query($this->conn,$sql);
            if($query){
                return true;
            }
            else {
                return false;
            }
    
        }

        //method for fetching records from table
        public function fetch_record($table){
            $sql = "SELECT * FROM ".$table;
            $array = array();
            $query = mysqli_query($this->conn,$sql);
            while($row = mysqli_fetch_assoc($query)){
                $array[] = $row;
            }
            return $array;
        }

        //method for testing login credentials
        public function fetch_user($username, $pass) {
            $sql = "SELECT * FROM user WHERE username='$username' and password='$pass'";
            $query = mysqli_query($this->conn, $sql);
            if(mysqli_num_rows($query) == 1){
                while($row = mysqli_fetch_assoc($query)) {
                    $array[] = $row;
                }
            }
            else {
                return false;
            }

            return $array;
        }

        //METHOD FOR fetching records with id
        public function fetch_id_record($id) {
            $sql = "SELECT * FROM item WHERE itemid= $id";
            $result = mysqli_query($this->conn, $sql);
            $this->update = true;
            $row = $result->fetch_array();
            return $row;

        }
        //method for updating record
        public function update_item_record($id, $item_name, $description, $category, $price, $path) {
            $sql = "UPDATE item SET item_name='$item_name', description='$description', category='$category', price='$price', path='$path'
                    WHERE itemid=$id";
            $query = mysqli_query($this->conn, $sql);

        }
        //method for deleting item with itemid
        public function delete_record($id) {
            $sql = "DELETE FROM item WHERE itemid = $id";
            $query = mysqli_query($this->conn, $sql);

            
        }

        public function delete_record_user($id) {
            $sql = "DELETE FROM user WHERE userid = $id";
            $query = mysqli_query($this->conn, $sql);

            
        }
        //method for fetching items with category
        public function fetch_item_category($category) {
            $sql = "SELECT * FROM item WHERE category='$category'";
            $query = mysqli_query($this->conn, $sql);

            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_assoc($query)) {
                    $array[] = $row;
                }
                return $array;
            }
            else {
                return false;
            }

        }
        //method for fectching favourite items of a user
        // public function fetch_user_fav($userid) {
        //     $sql = "SELECT itemid FROM favourite WHERE userid=$userid";
        //     $query = mysqli_query($this->conn, $sql);

        //     if(mysqli_num_rows($query) > 0){
        //         while($row = mysqli_fetch_assoc($query)) {
        //             $array[] = $row;
        //         }
        //         return $array;
        //     }
        //     else {
        //         return false;
        //     }
        // }

        //method for fetching favourite itemid of user with session
        public function fetch_fav_item($userid) {
            $sql = "SELECT itemid FROM FAVOURITE WHERE userid=$userid";
            $query = mysqli_query($this->conn, $sql);
            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_assoc($query)) {
                    $array[] = $row;
                }

                return $array;
            }

        }

        //method for removing favourite
        public function remove_fav($itemid, $userid) {
            echo $userid;
            $sql = "DELETE FROM favourite WHERE userid=$userid AND itemid=$itemid";
            $query = mysqli_query($this->conn, $sql);
            if($query){
                return true;
            }
            else return false;
        } 
        //method for removing all favourite of a user
        public function fav_delete_all($userid) {
            $sql = "DELETE FROM favourite WHERE userid=$userid";
            mysqli_query($this->conn, $sql);
            header('location: ../favourite.php');
        }

        //method for fetching cheap items with category 
        public function fetch_cheap_category($category) {
            $sql = "SELECT * FROM item WHERE category='$category' ORDER BY convert(`price`, decimal) ASC";
            $query = mysqli_query($this->conn, $sql);

            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_assoc($query)) {
                    $array[] = $row;
                }
            }
            return $array;
        }

        //method for fetching cheap items with category 
        public function fetch_letters_category($category) {
            $sql = "SELECT * FROM item WHERE category='$category' ORDER BY item_name ASC";

            $query = mysqli_query($this->conn, $sql);

            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_assoc($query)) {
                    $array[] = $row;
                }
            }
            return $array;
        }
        
        //method for fetching cheap items with category 
        public function fetch_exp_category($category) {
            $sql = "SELECT * FROM item WHERE category='$category' ORDER BY convert(`price`, decimal)  DESC";
            $query = mysqli_query($this->conn, $sql);

            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_assoc($query)) {
                    $array[] = $row;
                }
            }
            return $array;
        }

        //fetch items for search
        public function fetch_search_item($searchitem){
            $sql = "SELECT * FROM item where UPPER(item_name) LIKE '$searchitem%' OR UPPER(item_name)='$searchitem'";
            $query = mysqli_query($this->conn, $sql);

            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_assoc($query)) {
                    $array[] = $row;
                }
                return $array;
            }
            else{
                return false;
            }

        }
    }



    $obj = new CrudOperation;
