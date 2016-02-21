<?php
include_once './classes/order.php';
//if (isset($_POST['from']) === TRUE && isset($_POST['to']) === TRUE && empty($_POST['from']) === FALSE && empty($_POST['to']) === FALSE) {
print_r($_POST);   
$order = new order();
    $get_order = $order->select_order_form_to(1, $_POST['from'], $_POST['to']);
       //$get_order = $order->select_order_form_to(1, from, to);

    echo" <table class='table'>
                    <th>OrderDate</th>
                    <th>Status</th>
                    <th>Amount</th>
                    <th>Action</th>
                    while($row = mysqli_fetch_array($get_order)){
                    <tr> 
                        <td> $row[1]  <button class='glyphicon glyphicon-plus'></button></td>
                        <td>$row[8]</td>
                        <td>$row[7]</td>
                        <td> <a href='#' class=' btn btn-primary'> Edit</a>
                            <a href='#' class='btn btn-primary'> Delete</a>
                        </td>
                    </tr>
}
                </table>";
//}
?>
