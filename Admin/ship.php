<!DOCTYPE html>
<?php
include_once 'PHP/DB.php';
session_start(); 
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <div class="well">
            <center> <h1 style="font-size: 80px">SHIP LIST</h1></center>
        </div>
        <h3 style="font-size: 35px; background-color: dodgerblue">&nbsp;&nbsp;Pending List</h3><br>
        <form action="ship.php" method="post">
            <table class="table table-hover">
                <tr>
                    <th>ID</th>
                    <th>Ship Name</th>
                    <th>Call Sign</th>
                    <th>IMO Number</th>
                    <th>MMSI Number</th>
                    <th>Flag</th>
                    <th>Gross Tonnage</th>
                    <th>Net Tonnage</th>
                    <th>Ship Type</th>
                    <th>Port</th>
                    <th>Date</th>
                    <th>Company</th>
                    <th>Company Email</th>
                    <th>Company Phone</th>
                    <th>Year of Build</th>
                    <th>Length Overall</th>
                    <th>Dead Weight</th>
                    <th>Active Status</th>
                    <th>Status</th>
                </tr>
                <?php
                $ship = "select * from ship";
                $shipp = mysqli_query($con, $ship);
                while ($row = mysqli_fetch_array($shipp)) {
                    $id = $row['idship'];
                    $ship_name = $row['ship_name'];
                    $call_sign = $row['call_sign'];
                    $IMO_number = $row['IMO_number'];
                    $MMSI_number = $row['MMSI_number'];
                    $flag = $row['flag'];
                    $gross_tonnage = $row['gross_tonnage'];
                    $net_tonnage = $row['net_tonnage'];
                    $ship_type = $row['ship_type'];
                    $port = $row['port'];
                    $date = $row['date'];
                    $company = $row['company'];
                    $c_email = $row['c_email'];
                    $c_phone = $row['c_phone'];
                    $year_of_built = $row['year_of_built'];
                    $length_overall = $row['length_overall'];
                    $dead_weight = $row['dead_weight'];
                    $status = $row['status'];
                    if ($status == "1") {
                        echo "<tr>";
                        echo "<td>" . $id . "</td>";
                        echo "<td>" . $ship_name . "</td>";
                        echo "<td>" . $call_sign . "</td>";
                        echo "<td>" . $IMO_number . "</td>";
                        echo "<td>" . $MMSI_number . "</td>";
                        echo "<td>" . $flag . "</td>";
                        echo "<td>" . $gross_tonnage . "</td>";
                        echo "<td>" . $net_tonnage . "</td>";
                        echo "<td>" . $ship_type . "</td>";
                        echo "<td>" . $port . "</td>";
                        echo "<td>" . $date . "</td>";
                        echo "<td>" . $company . "</td>";
                        echo "<td>" . $c_email . "</td>";
                        echo "<td>" . $c_phone . "</td>";
                        echo "<td>" . $year_of_built . "</td>";
                        echo "<td>" . $length_overall . "</td>";
                        echo "<td>" . $dead_weight . "</td>";
                        echo "<td><h5 style='color: blue'>Pending</h5></td>";
                        echo "<td><button class='btn btn-primary' name='approve' value='$id'>Approve</button></td>";
                        echo "</tr>";
                    }
                }
                ?>
            </table>
        </form>
        <br><br>
        <h3 style="font-size: 35px; background-color: dodgerblue">&nbsp;&nbsp;Approved List</h3><br>
        <form action="ship.php" method="post">
            <table class="table table-hover">
                <tr>
                    <th>ID</th>
                    <th>Ship Name</th>
                    <th>Call Sign</th>
                    <th>IMO Number</th>
                    <th>MMSI Number</th>
                    <th>Flag</th>
                    <th>Gross Tonnage</th>
                    <th>Net Tonnage</th>
                    <th>Ship Type</th>
                    <th>Port</th>
                    <th>Date</th>
                    <th>Company</th>
                    <th>Company Email</th>
                    <th>Company Phone</th>
                    <th>Year of Build</th>
                    <th>Length Overall</th>
                    <th>Dead Weight</th>
                    <th>Active Status</th>
                    <th>Status Change</th>
                    <th>View More</th>
                </tr>
                <?php
                $ship = "select * from ship";
                $shipp = mysqli_query($con, $ship);
                while ($row = mysqli_fetch_array($shipp)) {
                    $id = $row['idship'];
                    $ship_name = $row['ship_name'];
                    $call_sign = $row['call_sign'];
                    $IMO_number = $row['IMO_number'];
                    $MMSI_number = $row['MMSI_number'];
                    $flag = $row['flag'];
                    $gross_tonnage = $row['gross_tonnage'];
                    $net_tonnage = $row['net_tonnage'];
                    $ship_type = $row['ship_type'];
                    $port = $row['port'];
                    $date = $row['date'];
                    $company = $row['company'];
                    $c_email = $row['c_email'];
                    $c_phone = $row['c_phone'];
                    $year_of_built = $row['year_of_built'];
                    $length_overall = $row['length_overall'];
                    $dead_weight = $row['dead_weight'];
                    $status = $row['status'];
                    if ($status != "1") {
                        echo "<tr>";
                        echo "<td>" . $id . "</td>";
                        echo "<td>" . $ship_name . "</td>";
                        echo "<td>" . $call_sign . "</td>";
                        echo "<td>" . $IMO_number . "</td>";
                        echo "<td>" . $MMSI_number . "</td>";
                        echo "<td>" . $flag . "</td>";
                        echo "<td>" . $gross_tonnage . "</td>";
                        echo "<td>" . $net_tonnage . "</td>";
                        echo "<td>" . $ship_type . "</td>";
                        echo "<td>" . $port . "</td>";
                        echo "<td>" . $date . "</td>";
                        echo "<td>" . $company . "</td>";
                        echo "<td>" . $c_email . "</td>";
                        echo "<td>" . $c_phone . "</td>";
                        echo "<td>" . $year_of_built . "</td>";
                        echo "<td>" . $length_overall . "</td>";
                        echo "<td>" . $dead_weight . "</td>";
                        if ($status == "0") {
                            echo "<td><h5 style='color: red'>Deactive</h5></td>";
                        } elseif ($status == "2") {
                            echo "<td><h5 style='color: blue'>Active</h5></td>";
                        }
                        if ($status == "0") {
                            echo "<td><button class='btn btn-success' name='active' value='$id'>Active</button></td>";
                        } elseif ($status == "2") {
                            echo "<td><button class='btn btn-danger' name='deactive' value='$id'>Deactive</button></td>";
                        }

                        echo "<td><button class='btn btn-primary' name='view' value='$id'>View More</button></td>";
                        echo "</tr>";
                    }
                }
                ?>
            </table>
        </form>
    </body>
</html>
<?php
if (isset($_POST['approve'])) {

    $s_id = $_POST['approve'];
    echo $s_id;
    $sql = "UPDATE ship SET status='2' WHERE idship=$s_id";
    echo $sql;

    if (mysqli_query($con, $sql)) {
        echo "<script>window.location.replace('ship.php')</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
   
}
if (isset($_POST['active'])) {
    $a_id = $_POST['active'];
    echo $a_id;
    $sql = "UPDATE ship SET status='2' WHERE idship=$a_id";
    echo $sql;

    if (mysqli_query($con, $sql)) {
        echo "<script>window.location.replace('ship.php')</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
if (isset($_POST['deactive'])) {
    $d_id = $_POST['deactive'];
    echo $d_id;
    $sql = "UPDATE ship SET status='0' WHERE idship=$d_id";
    echo $sql;

    if (mysqli_query($con, $sql)) {
        echo "<script>window.location.replace('ship.php')</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
if (isset($_POST['view'])) {
    $v_id = $_POST['view'];
    $_SESSION["ship_id"] = $v_id;
    echo "<script>window.location.replace('ViewDetails.php')</script>";

}
 mysqli_close($con);
?>
