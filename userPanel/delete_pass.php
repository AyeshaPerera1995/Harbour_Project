<?php
    include_once 'build/PHP/DB.php';
    session_start();

    if (isset($_GET['pass_id'])){
        $pass_id = $_GET['pass_id'];
        
    }

    $notification_id = $_SESSION['n_id'];

    $remove_p = "delete from passenger where idpassenger='$pass_id' AND notification_idnotification='$notification_id'";
    $run_p = mysqli_query($con, $remove_p);
    if ($run_p){
      
        echo "<script>window.location.replace('passenger.php','_self')</script>";

    }else{
        echo "alert('Error');";
    }

?>

<html>

<body style="background-color: black">

</body>
</html>