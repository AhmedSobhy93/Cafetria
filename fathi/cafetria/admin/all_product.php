<?php include_once 'header.php'; ?>
	<hr>
	<!-- body -->
	<div id="legend">
              <legend class="">All Product</legend>
              <a href="#"><span class="add"> Add Product</span></a>
            </div>
            <div class="table-responsive" id="mytable">
  <table class="table" >
  	<th>product</th>
  	<th>price</th>
  	<th>Image</th>
  	
  	 <th>Action</th>
          <?php
        include_once '../classes/db_connection.php';
        include_once '../classes/product.php';
       // include_once '../classes/category.php';
       // $category = new category();
        $products = new product();
        $page = isset($_GET['page'])?$_GET['page']:1;
        if ($page == "" || $page == "1") {
            $page1 = 0;
        }  else {
            $page1=($page*5)-5;
        }
        $query = $products->select_all_prodcut($page1);
        $count = mysqli_num_fields($query);
        $counting = ceil(($count / 5));
        while ($row = mysqli_fetch_array($query)) {
  	echo" <tr> 
	<td> $row[1]</td>
	<td>$row[5]</td>
	<td><img src=uploads_product/$row[2]  width=60px height=45px></td>
	
	<td> <a href='add_product_update.php?product_id=" . $row['product_id'] . "' class=' btn btn-primary'> Edit</a>
	<a href='deleteproduct.php?product_id=" . $row['product_id'] . "' class=' btn btn-primary'> Delete</a>
	
		<a href='#.php?user_id=" . $row['product_id'] . "' class=' btn btn-primary'> Avalable</a>

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
            echo " <li><a href='all_product.php?page=$index'> " . $index . "</a></li>";
        }
        ?>

</ul>
</div>
<!-- footer using well -->
	<?php
include_once 'footer.php';
?>
