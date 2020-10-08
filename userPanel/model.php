
<?php
//Include database connection
include_once 'build/PHP/DB.php';

if($_POST['cid']) {
    $id = $_POST['cid']; //escape string

    $get_consign = "SELECT * from consignments where idconsignments='$id'";
    $run_consign = mysqli_query($con, $get_consign);
    $row = mysqli_fetch_assoc($run_consign);
    $num_items = $row['number_of_items'];
    $ucr = $row['UCR'];
    $place_consigned = $row['place_whence_consigned'];
    $receipt_place = $row['goods_receipt_place'];
    $method_pay = $row['freight_method_of_payment'];
    $num_auth = $row['number_of_authorisation'];
    $info = $row['additional_info'];
    
    echo "<label style='font-size:18px;'>Number of items : </label><br>";
    echo "<label style='font-size:15px;'>$num_items</label><hr style='margin:0; padding:0;'>";
    echo "<label style='font-size:18px;'>UCR : </label><br>";
    echo "<label style='font-size:15px;'>$ucr</label><br><hr style='margin:0; padding:0;'>";
    echo "<label style='font-size:18px;'>Place whence consigned :</label><br>";
    echo "<label style='font-size:15px;'>$place_consigned</label><hr style='margin:0; padding:0;'>";
    echo "<label style='font-size:18px;'>Goods receipt place :</label><br>";
    echo "<label style='font-size:15px;'>$receipt_place</label><hr style='margin:0; padding:0;'>";
    echo "<label style='font-size:18px;'>Freight method of payment : </label><br>";
    echo "<label style='font-size:15px;'>$method_pay</label><hr style='margin:0; padding:0;'>";
    echo "<label style='font-size:18px;'>Number of authorisation : </label><br>";
    echo "<label style='font-size:15px;'>$num_auth</label><hr style='margin:0; padding:0;'>";
    echo "<label style='font-size:18px;'>Additinal Infomation :</label><br>";
    echo "<label style='font-size:15px;'>$info</label>";

 }
?>