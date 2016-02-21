<?php

//$page=$_GET['page'];
    include_once '../classes/db_connection.php';
    include_once '../classes/product.php';
    $product = new product();
    $delete = $product->delete_product($_GET['product_id']);
if($delete){
    header('location:all_product.php?msg=success');
} else {
    header('location:all_product.php?msg=no_id');
}
?>
