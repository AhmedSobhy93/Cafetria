<?php
include_once 'db_connection.php';
class users extends db_connection {

    public function add_user($user_name,$user_email,$password,$picture,$ext,$room_id) {
        $res = mysqli_query($this->con, "INSERT INTO `users`(`user_name`,`user_email`,`password`,`picture`,`ext`,`room_id`) 
            VALUES ('" . $user_name . "','" . $user_email . "','" . $password . "','" . $picture . "',$ext,$room_id)");
           return $res;

        }
        public function select_all_users($page1) {
            //rana
             $res = mysqli_query($this->con, "select * from `users` limit $page1,5 ");
        return $res;
        }
        public function edit_user($user_id,$user_name,$user_email,$password,$picture,$ext,$room_id) {
            //fathi hayro7 3ala page el add user
        $res = mysqli_query($this->con, "update `users` set user_name='" . $user_name . "',user_email='" . $user_email . "' ,
            password='" . $password . "',picture='" . $picture . "',ext=" . $ext . ",room_id=" . $room_id . " WHERE user_id= " . $user_id . " ");
        return $res;
    }
        
        public function delete_user($user_id) {
            // fathi ajax
        $image = mysqli_query($this->con, "select * from `users` where `user_id` = " . $user_id . "");
        $fetch = mysqli_fetch_row($image);

        //Delete image
        unlink("../admin/uploads/" . $fetch[4]);
        $re = mysqli_query($this->con, " delete  from users where user_id=".$user_id."");
        return $re;
    
        }
       
}

?>
