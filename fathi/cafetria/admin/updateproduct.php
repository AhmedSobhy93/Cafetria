<?php
include_once '../classes/db_connection.php';
include_once '../classes/product.php';
//$product_id,$product_name,$product_picture,$category_id,$product_price
$product = new product();

    // $name = $_FILES["picture"]["name"];
    $pro = $product->edit_product($_POST['product_id'], $_POST['product_name'], $_POST['category_id'], $_POST['product_price']);
//    print_r($_POST);
//    exit();
    if ($pro) {
        header('location:all_product.php?product_id=' . $_POST['product_id'] . '');
    } else {
        header('location:all_product.php?msg=no_id');
    }

?>
