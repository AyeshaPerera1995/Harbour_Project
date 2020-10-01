<?php
    include_once 'build/PHP/DB.php';
    session_start();

    $sid = $_SESSION['ship_id'];

    $save_noti = "insert into notification(ship_idship,status) values('$sid',0)";
    $run_noti = mysqli_query($con, $save_noti);
    if ($run_noti){

        $get_noti = "select idnotification from notification order by idnotification DESC LIMIT 1";
        $r_noti = mysqli_query($con, $get_noti);
        $row_noti = mysqli_fetch_assoc($r_noti);
        $_SESSION['n_id'] = $row_noti['idnotification'];

        echo "<script>window.open('upload_new_noti_details.php')</script>";

    }

?>

<html>

<body style="background-color: black">

</body>
</html>
