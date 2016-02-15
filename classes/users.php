<?php
include_once './db_connection.php';
class users extends db_connection {

    public function add_user($user_name,$user_email,$password,$picture,$ext,$room_id) {
        $res = mysqli_query($this->con, "INSERT INTO ` users`(user_name,user_email,password,picture,ext,room_id) 
            VALUES ('" . $user_name . "','" . $user_email . "','" . $password . "','" . $picture . "',$ext,$room_id)");
           return $res;

        }
        public function select_all_users() {
            //rana
        }
        public function edit_user($param) {
            //fathi hayro7 3ala page el add user
        }
        public function delete_user($param) {
            // fathi ajax
        }
       
}

?>
