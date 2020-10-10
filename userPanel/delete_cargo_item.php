<?php
    include_once 'build/PHP/DB.php';  

    if (isset($_GET['cargo_id']) && isset($_GET['con_id']) && isset($_GET['cd_id'])){

        $cargo_id = $_GET['cargo_id'];
        $con_id = $_GET['con_id'];
        $cd_id = $_GET['cd_id'];
        
    }
?>

<html>
    <head>
<!--alert-->
<script src="../sweetalert/sweetalert2.all.min.js"></script>
    </head>

<body style="background-color: black">

</body>
</html>

<?php

$del_cargo = "DELETE from cargo_details where idcargo_details='$cargo_id'";
if(mysqli_query($con, $del_cargo)){

    echo "<script>
    swal({
        type: 'warning',
        title: 'Cargo item is deleted !',
        text: 'You will not be able to recover this cargo item',
        showConfirmButton: true,    
        confirmButtonClass: 'btn-danger',  
        confirmButtonText: 'DONE'
    })
    .then(willDelete => {
      if (willDelete) {
    window.open('cargo_cargoitems.php?con_id=$con_id&cd_id=$cd_id','_self')
      }
    });
    </script>";

} else {
    echo "Error: " . $del_cargo . "<br>" . mysqli_error($con);
}


            


?>














