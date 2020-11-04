<?php
    include_once 'build/PHP/DB.php';
    session_start();

    if (isset($_GET['crew_id'])){
        $crew_id = $_GET['crew_id'];
        
    }

    $notification_id = $_SESSION['n_id'];

    $remove_crew = "delete from crew_person where idcrew_person='$crew_id' AND notification_idnotification='$notification_id'";
    $run_crew = mysqli_query($con, $remove_crew);
    if ($run_crew){
      
        echo "<script>window.location.replace('crew.php','_self')</script>";

    }else{
        echo "alert('Error');";
    }

?>

<html>

<body style="background-color: black">

</body>
</html>