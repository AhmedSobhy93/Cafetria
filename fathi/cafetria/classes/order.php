<?php

include_once 'db_connection.php';

class order extends db_connection {

    public function insert_order_user($param) {
        //rana  
    }

    public function insert_order_product($param) {
        //rana  
    }

    public function select_order_form_to($user_id,$from,$to) {
        //fathi  
      $res = mysqli_query($this->con,"SELECT * FROM `order_user`, `order_product` WHERE `order_date`>=.$from. and`order_date`<=.$to. and `user_id`=$user_id");
    
        return $res;
    }
    

    public function select_prodcut_at_date($param) {
        //fathi
    }
    public function select_($param) {
        
    }
}

?>
