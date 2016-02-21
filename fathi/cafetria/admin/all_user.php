<?php
include_once 'header.php';
//$_GET['page1'];
//header('location:all_user.php?page=2');
//break;
?>
<hr>
<!-- body -->
<div id="legend">
    <legend class="">All Users</legend>
    <a href="#"><span class="add"> Add User</span></a>
</div>
<div class="table-responsive" id="mytable">
    <table class="table" >
        <th>Name</th>
        <th>Room</th>
        <th>Image</th>
        <th>Ext</th>
        <th>Action</th>
        <?php
        include_once '../classes/db_connection.php';
        include_once '../classes/users.php';
        include_once '../classes/room.php';
        $room = new room();
        $users = new users();
        $page = isset($_GET['page'])?$_GET['page']:1;
        if ($page == "" || $page == "1") {
            $page1 = 0;
        } else {
            $page1 = ($page * 5) - 5;
        }
        $query = $users->select_all_users($page1);
        $count = mysqli_num_fields($query);
        $counting = ceil(($count / 5));

        while ($row = mysqli_fetch_array($query)) {

            echo "<tr> 
	<td> $row[1]</td>";
            $rooms = $room->select_room($row[6]);
            while ($row1 = mysqli_fetch_array($rooms)) {
                echo"  <td>$row1[1]</td>  ";
            }


            echo"<td><img src=uploads/$row[4]  width=60px height=45px></td>
	<td>$row[5]</td>
	<td> <a href='add_user_update.php?user_id=" . $row['user_id'] . "' class=' btn btn-primary'> Edit</a>
	<a href='deleteuser.php?user_id=" . $row['user_id'] . "' class=' btn btn-primary'> Delete</a>

</td>
  	 </tr>";
        }
        ?>
    </table>
</div>
<div class="pag">
    <ul class="pagination">
        <?php
        for ($index = 1; $index <= $counting; $index++) {
            echo " <li><a href='all_user.php?page=$index'> " . $index . "</a></li>";
        }
        ?>
    </ul>
</div>
<!-- footer using well -->
<?php
include_once 'footer.php';