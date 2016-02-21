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
         public function get_by_id($table, $pk, $value) {
        $resl = mysqli_query($this->con, "select * 
            from `$table`
            where `$pk`=$value");
        return $resl;
    }

}

?>
