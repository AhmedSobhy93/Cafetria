<?php

$_GET['page'];
    include_once '../classes/db_connection.php';
    include_once '../classes/users.php';
    $user = new users();
    $delete = $user->delete_user($_GET['user_id']);
if($delete){
    header('location:all_user.php?msg=success');
} else {
    header('location:all_user.php?msg=no_id');
}
?>
