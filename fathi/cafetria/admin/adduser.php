<?php
//print_r($_POST);
//exit();
session_start();
include_once '../classes/db_connection.php';
include_once '../classes/users.php';
$user = new users();

    if (($_FILES["picture"]["type"] == "image/gif") ||
            ($_FILES["picture"]["type"] == "image/jpeg") ||
            ($_FILES["picture"]["type"] == "image/jpg") ||
            ($_FILES["picture"]["type"] == "image/pjpeg") ||
            ($_FILES["picture"]["type"] == "image/x-png") ||
            ($_FILES["picture"]["type"] == "image/png") && ($_POST['password']== $_POST['confirm_password'])&&isset($_POST['user_name'])&&isset($_POST['user_name'])&&
            isset($_POST['user_email'])&&isset($_POST['password'])&&isset($_POST['ext'])&&isset($_POST['room_id'])) {
$_FILES["picture"]["name"] = preg_replace("/[^a-zA-Z0-9.]/", "", $_FILES["picture"]["name"]);
        move_uploaded_file($_FILES["picture"]["tmp_name"], "uploads/" . $_FILES["picture"]["name"]);
        //$user_name,$user_email,$password,$picture,$ext,$room_id
        $p = $user->add_user($_POST['user_name'], $_POST['user_email'],md5($_POST['password']), $_FILES["picture"]["name"], $_POST['ext'], $_POST['room_id']);
       // print_r($p);
        if ($p==1) {
            header("location:add_user.php?msg=success");
        } else {
            header("location:add_user.php?msg=failawe");
        }
    }  else {
                    header("location:add_user.php?msg=fail");

}

 
?>