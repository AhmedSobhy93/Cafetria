<?php
class db_connection {

    public $con = "";
    public $local = "localhost";
    public $user = "root";
    public $password = "";
    public $database = "cafetria";
    //private $result = array(); 

    public function db_connection() {
       $this->con = mysqli_connect($this->local, $this->user, $this->password, $this->database);
   
        }

}

?>
