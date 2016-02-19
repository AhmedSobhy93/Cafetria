<?php

include_once 'db_connection.php';

class product extends db_connection {

    public function search_product($param) {
        //rana
    }

    public function search_favorite_product($param) {
        //rana
    }

   public function get_all_product() {
        //rana
        $db = db_connection::getInstance();
        $mysqli = $db->getConnection();
        $query = " select * from product where product_amount = 'avaliable' ";
        $res = $mysqli->query($query) or die (mysqli_error($mysqli));
        if($res)
        {
            return $res;
        }
        else
        {
            return false;
        }

    }

    public function select_all_prodcut($param) {
        //fathi
    }

    public function edit_product($param) {
        //fathi
        // hayro7 3ala add product page but  with current data 
    }

    public function delete_product($param) {
        //fathi  ajax
    }

    public function add_product($product_name,$product_picture,$product_amount,$category_id) {
        // sobhy
	
	$result=mysqli_query("INSERT INTO product(product_name,product_picture,product_amount,category_id)VALUES ('$product_name','$product_picture','$product_amount','$category_id')");
	return $result;
    
    }

    public function total_amount_per_user($param) {
        // sobhy
    }
    public function select_prodcut_from_to($param) {
        //sobhy
    }
    
}

?>
