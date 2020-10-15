<?php
    include_once 'build/PHP/DB.php';
    session_start();

    $sid = $_SESSION['ship_id'];
    $u_id = $_SESSION['user_id'];

    $save_noti = "insert into notification(status,ship_idship,user_iduser) values(0,'$sid','$u_id')";
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
