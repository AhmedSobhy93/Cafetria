<?php

include_once 'db_connection.php';

class category extends db_connection {

    public function select_categorys() {
        $res = mysqli_query($this->con, "select * from `category`");
        return $res;
    }
    public function select_room($room_id){
         $res = mysqli_query($this->con, "select * from `room` where `room_id`= $room_id");
        return $res;
    }
}

?>
