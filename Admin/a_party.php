
<?php
//Include database connection
include_once 'build/PHP/DB.php';

if($_POST['party_id']) {
    $party_id = $_POST['party_id'];

    $get_party = "SELECT * from party_notified where id_party_notified='$party_id'";
    $run_party = mysqli_query($con, $get_party);
    $row = mysqli_fetch_assoc($run_party);
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