
<?php
//Include database connection
include_once 'build/PHP/DB.php';

if($_POST['carr_id']) {
    $carr_id = $_POST['carr_id'];

    $get_carrier = "SELECT * from carrier where idcarrier='$carr_id'";
    $run_carrier = mysqli_query($con, $get_carrier);
    $row = mysqli_fetch_assoc($run_carrier);
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