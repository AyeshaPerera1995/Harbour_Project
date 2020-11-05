
<?php
//Include database connection
include_once 'PHP/DB.php';

if($_POST['sid']) {
    $sid = $_POST['sid'];

    $get_ship = "SELECT * from ship where idship='$sid'";
    $run_ship = mysqli_query($con, $get_ship);
    $row = mysqli_fetch_assoc($run_ship);
    $gt = $row['gross_tonnage'];
    $nt = $row['net_tonnage'];
    $st = $row['ship_type'];
    $cport = $row['certify_port'];
    $cdate = $row['certify_date'];
    $name = $row['certify_number'];
    $p_code = $row['company'];
    $s_number = $row['c_email'];
    $city = $row['c_phone'];
    $country = $row['year_of_built'];
    $name = $row['length_overall'];
    $p_code = $row['dead_weight'];
    $s_number = $row['beam'];
    $city = $row['ship_desc'];
    
    echo "<label style='font-size:18px; color:gray;'>Ship Type : </label><br>";
    echo "<label style='font-size:16px;'>$sid</label><hr style='margin:0; padding:0;'>";
    echo "<label style='font-size:18px; color:gray;'>Gross Tonnage : </label><br>";
    echo "<label style='font-size:16px;'>$gt</label><br><hr style='margin:0; padding:0;'>";
    echo "<label style='font-size:18px; color:gray;'>Net Tonnage :</label><br>";
    echo "<label style='font-size:16px;'>$nt</label><hr style='margin:0; padding:0;'>";
    echo "<label style='font-size:18px; color:gray;'>Certify Port :</label><br>";
    echo "<label style='font-size:16px;'>$cport</label><hr style='margin:0; padding:0;'>";
    echo "<label style='font-size:18px; color:gray;'>Certify Date : </label><br>";
    echo "<label style='font-size:16px;'>$cdate</label>";

 }
?>