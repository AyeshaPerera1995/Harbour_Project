
<?php
//Include database connection
include_once 'build/PHP/DB.php';

if($_POST['consignee_id']) {
    $consignee_id = $_POST['consignee_id'];

    $get_consignee = "SELECT * from consignee where idconsignee='$consignee_id'";
    $run_consignee = mysqli_query($con, $get_consignee);
    $row = mysqli_fetch_assoc($run_consignee);
    $name = $row['name'];
    $p_code = $row['postal_code'];
    $s_number = $row['street_number'];
    $city = $row['city'];
    $country = $row['country'];
    
    echo "<label style='font-size:18px; color:gray;'>Name : </label><br>";
    echo "<label style='font-size:16px;'>$name</label><hr style='margin:0; padding:0;'>";
    echo "<label style='font-size:18px; color:gray;'>Postal Code : </label><br>";
    echo "<label style='font-size:16px;'>$p_code</label><br><hr style='margin:0; padding:0;'>";
    echo "<label style='font-size:18px; color:gray;'>Street Number :</label><br>";
    echo "<label style='font-size:16px;'>$s_number</label><hr style='margin:0; padding:0;'>";
    echo "<label style='font-size:18px; color:gray;'>City :</label><br>";
    echo "<label style='font-size:16px;'>$city</label><hr style='margin:0; padding:0;'>";
    echo "<label style='font-size:18px; color:gray;'>Country : </label><br>";
    echo "<label style='font-size:16px;'>$country</label>";

 }
?>