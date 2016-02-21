<?php

include_once 'db_connection.php';

class product extends db_connection {

    public function search_product($param) {
        //rana
    }

    public function search_favorite_product($param) {
        //rana
    }

    public function get_all_product($param) {
        //rana
    }

    public function select_all_prodcut($page1) {
        //fathi

        $res = mysqli_query($this->con, "select * from `product` limit $page1,5 ");
        return $res;
    }

    public function edit_product($product_id, $product_name,  $category_id, $product_price) {
        //fathi
        // hayro7 3ala add product page but  with current data 
        $res = mysqli_query($this->con, "update `product` set product_name='" . $product_name . "' ,
            category_id= ". $category_id .",product_price= ". $product_price."  WHERE product_id= " . $product_id . " ");
        return $res;
    }

    public function delete_product($product_id) {
        //fathi  ajax
        $image = mysqli_query($this->con, "select * from `product` where `product_id` = " . $product_id . "");
        $fetch = mysqli_fetch_row($image);

        //Delete image
        unlink("../admin/uploads/" . $fetch[4]);
        $re = mysqli_query($this->con, " delete  from product where product_id=" . $product_id . "");
        return $re;
    }

    public function add_product($param) {
        // sobhy
    }

    public function total_amount_per_user($param) {
        // sobhy
    }

    public function select_prodcut_from_to($param) {
        //sobhy
    }

}

?>
