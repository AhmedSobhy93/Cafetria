<?php
//if(isset($_POST['update']))
//{
      include_once '../classes/db_connection.php';   
      include_once '../classes/users.php';
      //($user_id,$user_name,$user_email,$password,$picture,$ext,$room_id)
    $user= new users();
    if (($_FILES["picture"]["type"] == "image/gif") ||
            ($_FILES["picture"]["type"] == "image/jpeg") ||
            ($_FILES["picture"]["type"] == "image/jpg") ||
            ($_FILES["picture"]["type"] == "image/pjpeg") ||
            ($_FILES["picture"]["type"] == "image/x-png") ||
            ($_FILES["picture"]["type"] == "image/png") && ($_POST['password']== $_POST['confirm_password'])&&isset($_POST['user_name'])&&isset($_POST['user_name'])&&
            isset($_POST['user_email'])&&isset($_POST['password'])&&isset($_POST['ext'])&&isset($_POST['room_id'])) {
       // $name = $_FILES["picture"]["name"];
        move_uploaded_file($_FILES["picture"]["tmp_name"], "uploads/" . $_FILES["picture"]["name"]);
    $use=$user->edit_user($_POST['user_id'],$_POST['user_name'],$_POST['user_email'],$_POST['password'],$_FILES["picture"]["name"],$_POST['ext'],$_POST['room_id']);
   if($use){
    header('location:all_user.php?user_id='.$_POST['user_id'].'');
}else {
    header('location:all_user.php?msg=no_id');
}
            }
?>
