<?php
include_once "./header.php";
?>
<!-- body -->
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">

        <form class="form-horizontal" action="adduser.php" method="POST" enctype="multipart/form-data"> 
            <fieldset>
                <div id="legend">
                    <legend class="">Add Users</legend>
                </div>
                <div class="control-group">
                    <label class="control-label"  for="name">Name</label>
                    <div class="controls">
                        <input type="text" id="name" name="user_name" placeholder="" class="form-control input-lg">
                        <p class="help-block">Please provide the user name</p>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="email">Email</label>
                    <div class="controls">
                        <input type="email" id="email" name="user_email" placeholder="" class="form-control input-lg">
                        <p class="help-block">Please provide the user Email</p>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="password">Password</label>
                    <div class="controls">
                        <input type="password" id="password" name="password" placeholder="" class="form-control input-lg">

                        <p class="help-block">Please provide password for user</p>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="confirm_password">Confirm Password</label>
                    <div class="controls">
                        <input type="confirm_password" id="confirm_password" name="confirm_password" placeholder="" class="form-control input-lg">

                    </div>
                </div>


                <label class="control-label" for="room">Room</label>
                <select name="room">
                    <?php
                    include_once '../classes/db_connection.php';
                    include_once '../classes/room.php';
                    $room = new room();
                    $rooms = $room->select_rooms();
                    //print_r($rooms);
                    while ($row = mysqli_fetch_array($rooms)) {
                        echo " <option value='$row[0]'>" . $row[1] . "</option>";
                    }
                    ?>
                </select>



                <div class="control-group">
                    <label class="control-label" for="product-picture">Product Picture</label>

                    <span class="btn-file file-input btn btn-block btn-primary">
                        Browse <input name="picture" type="file">
                    </span>
                </div>
                <label class="control-label"  for="name">Ext</label>
                <div class="controls">
                    <input type="text" id="name" name="ext" placeholder="" class="form-control input-lg">
                </div>
                </div>

                <div class="control-group">
                    <!-- Button -->
                    <div class="controls">
                        <button class="btn btn-success" name="add" value="add">Save</button>
                        <input type="reset" class="btn btn-warning"/>
                    </div>
                </div>

            </fieldset>
</form>
    </div>
</div>
<?php
include_once 'footer.php';
?>