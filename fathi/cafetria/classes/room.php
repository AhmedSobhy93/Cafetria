<?php

include_once 'db_connection.php';

class room extends db_connection {

    public function select_rooms() {
        $res = mysqli_query($this->con, "select * from `room`");
        return $res;
    }
    public function select_room($room_id){
         $res = mysqli_query($this->con, "select * from `room` where `room_id`= $room_id");
        return $res;
    }
}

?>
