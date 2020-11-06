<?php
    include_once 'build/PHP/DB.php';
    session_start();

    $sid = $_SESSION['ship_id'];
    $u_id = $_SESSION['user_id'];

    $c_date = date('Y-m-d');
    date_default_timezone_set("Asia/Colombo");
    $c_time = date("h:i:s");

    $save_noti = "insert into notification(received_date,received_time,status,ship_idship,user_iduser) values('$c_date','$c_time',0,'$sid','$u_id')";
    $run_noti = mysqli_query($con, $save_noti);
    if ($run_noti){

        $get_noti = "select idnotification from notification order by idnotification DESC LIMIT 1";
        $r_noti = mysqli_query($con, $get_noti);
        $row_noti = mysqli_fetch_assoc($r_noti);
        $_SESSION['n_id'] = $row_noti['idnotification'];
      
        echo "<script>window.location.replace('upload_new_noti_details.php','_self')</script>";

    }else{
        echo "alert('Error');";
    }

?>

<html>

<body style="background-color: black">

</body>
</html>
