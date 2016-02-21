<?php
include_once './header.php';
?>
<hr>
<!-- body -->
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <?php
        include_once '../classes/db_connection.php';
        $getid = new db_connection();
        $get_id = $getid->get_by_id('product', 'product_id', $_REQUEST['product_id']);
        $row = mysqli_fetch_array($get_id);

        echo ' <form class="form-horizontal" action="updateproduct.php" method="POST">
          <fieldset>
            <div id="legend">
              <legend class="">Add Products</legend>
            </div>
            <input type="hidden"  name="product_id"  value=' . $row[0] . '>
            <div class="control-group">
              <label class="control-label" for="product">Product</label>
              
              <div class="controls">
                <input type="text" id="product" value=' . $row[1] . '   name="product_name"  placeholder="" class="form-control input-lg">
                <p class="help-block">Product can contain any letters</p>
              </div>
            </div>
         
              <div class="control-group">
              <label class="control-label" for="category" >Category</label>
              <div class="controls">
                  <select class="form-control" name="category_id" id="category">';
        ?>
        <?php
        //include_once '../classes/db_connection.php';
        include_once '../classes/category.php';
        $category = new category();
        $categories = $category->select_categorys();
        while ($rowone = mysqli_fetch_array($categories)) {
            echo " <option name='category_id' value='$rowone[0]'>" . $rowone[1] . "</option>";
        }

        echo'</select>
			  <p class="help-block">Please provide the product Category</p>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="price">Price</label>
              <div class="controls">
                <input type="number" id="price"  value=' . $row[5] . '  name="product_price" placeholder="" class="form-control input-lg">
                <p class="help-block">Please provide the product price</p>
              </div>
            </div>';
        ?>

        <div class="control-group">
            <label>

            </label>
        </div>

        <div class="control-group">
            <!-- Button -->
            <div class="controls">
                <button class="btn btn-success" id="save">Save</button>
                <input type="reset" class="btn btn-warning"/>
            </div>
        </div>

        </fieldset>
        </form>

    </div> 
</div>



<div class="row">
    <div class="col-sm-12">
        <pre>
			
        </pre>
    </div>

</div>


<!-- footer using well -->
<?php
include_once './footer.php';
?>