<?php
session_start();
//if (isset($_POST['post'])) {
include_once '../classes/db_connection.php';
include_once '../classes/users.php';
$users = new users();
if (!empty($_FILES['picture']['name'])) {
    if (($_FILES["picture"]["type"] == "image/gif") ||
            ($_FILES["picture"]["type"] == "image/jpeg") ||
            ($_FILES["picture"]["type"] == "image/jpg") ||
            ($_FILES["picture"]["type"] == "image/pjpeg") ||
            ($_FILES["picture"]["type"] == "image/x-png") ||
            ($_FILES["picture"]["type"] == "image/png")) {
        move_uploaded_file($_FILES["picture"]["tmp_name"], "uploads/" . $_FILES["picture"]["name"]);
        //$user_name,$user_email,$password,$picture,$ext,$room_id
        $p = $users->add_user($_POST['user_name'], $_POST['user_email'], $_POST['password'], $_FILES["picture"]["name"], $_POST['ext'], $_POST['room_id']);
       // print_r($p);
        if ($p) {
            header("location:add_user.php?msg=success");
        } else {
            header("location:add_user.php?msg=failawe");
        }
    }
}
 else {
     header("location:add_user.php?msg=fail");
}
?>