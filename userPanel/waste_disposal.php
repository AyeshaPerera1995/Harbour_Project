<!DOCTYPE html>
<?php
session_start();
include_once 'build/PHP/DB.php';

?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!--alert-->
    <script src="../sweetalert/sweetalert2.all.min.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="../index.php" class="nav-link">Home</a>
            </li>
        </ul>




    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">User Panel</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                <div class="info">
                    <a href="#" class="d-block"><?php echo $_SESSION['user_email'];?></a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item ">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fas fa-cog"></i>
                            <p>
                                Dashbord

                            </p>
                        </a>

                    </li>
                    <li class="nav-item ">
                        <a href="upload_new_noti_details.php" class="nav-link ">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                My Home
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="addship.php" class="nav-link">
                            <i class="nav-icon fas fa-ship"></i>
                            <p>
                                add Ship

                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="passenger.php" class="nav-link">
                            <i class="nav-icon fas fa-life-ring"></i>
                            <p>
                                add Passenger

                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="crewperson.php" class="nav-link">
                            <i class="nav-icon fas fa-person-booth"></i>
                            <p>
                                add Crew Person

                            </p>
                        </a>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"> <i class="fas fa-trash-alt"></i>     Waste / Waste Disposal</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-success"><br>
                            <h5 class="bg-success" style="padding:5px; margin-top: 15px; margin-left:20px; border-radius:5px; font-weight: bold; width: 97%;">Last port and date when ship generated waste was delivered</h5>

                            <form role="form" action="waste_disposal.php" method="post">
                                <div class="card-body">
                                    <div role="form">
                                        <div class="row">
<?php

            $get_waste = "select * from waste_info order by idwaste_info DESC LIMIT 1";
            $r_waste = mysqli_query($con, $get_waste);
            $row_waste = mysqli_fetch_assoc($r_waste);
            $waste_id = $row_waste['idwaste_info'];
            $port = $row_waste['last_waste_port'];
            $date = $row_waste['last_waste_date'];

?>
                                        <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Port</label>
                                                    <input type="text" required class="form-control" disabled value="<?php echo $port;?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Date</label>
                                                    <input type="date" required class="form-control" disabled value="<?php echo $date;?>">
                                                </div>
                                            </div>

                                        <h5 class="bg-success" style="padding:5px; margin-top: 15px; margin-left:5px; border-radius:5px; font-weight: bold; width: 100%;">Waste Disposal Information</h5>

                                        <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Waste type</label>
                                                    <input type="text" class="form-control" name="type">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Waste to be delivered</label>
                                                    <input type="text" class="form-control" name="delivered">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Maximum dedicated storage capacity</label>
                                                    <input type="text" class="form-control" name="capacity">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Amount of waste retained on board</label>
                                                    <input type="text" class="form-control" name="amount">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Port of delivery of remaining waste</label>
                                                    <input type="text" class="form-control" name="remaining_waste">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Estimated amount of waste to be generated</label>
                                                    <input type="text" class="form-control" name="estimated_amount">
                                                </div>
                                            </div>  
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                <button type="submit" name="wd_upload" class="form-control bg-success"><i class="fas fa-plus"></i>   Upload & Add to table</button>                                          
                                                </div>
                                            </div>  
                                        
                                        </div>
                                        <hr>
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th>Waste Type</th>
                                                <th>Waste to be Delivered</th>
                                                <th>Maximum_Dedicated_Storage_Capacity</th>
                                                <th>Amount of waste Retained Onboard</th>
                                                <th>Port of Delivery of Remaining Waste</th>
                                                <th>Estimate Waste to be Generate</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sel_ss = "SELECT * from waste_disposal_info where waste_info_idwaste_info='$waste_id'";
                                                $run_ss = mysqli_query($con, $sel_ss);
                                                while ($row = mysqli_fetch_array($run_ss)) {                                             
                                                    $id = $row['idwaste_disposal_info'];
                                                    $type = $row['waste_type'];
                                                    $deliverd = $row['waste_tobe_delivered'];
                                                    $capacity = $row['maximum_dedicated_storage_capacity'];
                                                    $onboard = $row['amount_of_waste_retained_onboard'];
                                                    $remaining_waste = $row['port_of_delivery_of_remaining_waste'];
                                                    $tobe_generate = $row['estimate_waste_tobe_generate'];
                                                    $idwaste_info = $row['waste_info_idwaste_info'];
                                                
                                                ?>
                                            <tr>
                                                <td><?php echo "$type";?></td>
                                                <td><?php echo "$deliverd";?></td>
                                                <td><?php echo "$capacity";?></td>
                                                <td><?php echo "$onboard";?></td>
                                                <td><?php echo "$remaining_waste";?></td>
                                                <td><?php echo "$tobe_generate";?></td>
                                            </tr>

                                        <?php
                                                }
                                        ?>
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>  <!--    col-d-12-->


                </div>



            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->




    <footer class="main-footer">

    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>

</body>
</html>

<?php
if (isset($_POST['wd_upload'])) {
    $type = $_POST['type'];
    $delivered = $_POST['delivered'];
    $capacity = $_POST['capacity'];
    $amount = $_POST['amount'];
    $remaining_waste = $_POST['remaining_waste'];
    $estimated_amount = $_POST['estimated_amount'];

    $get_waste = "select idwaste_info from waste_info order by idwaste_info DESC LIMIT 1";
    $r_waste = mysqli_query($con, $get_waste);
    $row_waste = mysqli_fetch_assoc($r_waste);
    $waste_id = $row_waste['idwaste_info'];
    
    $sql2 = "INSERT INTO waste_disposal_info (waste_type,waste_tobe_delivered,maximum_dedicated_storage_capacity,amount_of_waste_retained_onboard,port_of_delivery_of_remaining_waste,estimate_waste_tobe_generate,waste_info_idwaste_info) "
            . "values('$type','$delivered','$capacity','$amount','$remaining_waste','$estimated_amount','$waste_id')";
    
    if (mysqli_query($con, $sql2)) {
        echo "<script>
    			swal({
                    type: 'success',
                    title:'Waste disposal items added!',
                    showConfirmButton: true,
                    confirmButtonText: 'OK'
                })
                .then(willDelete => {
                    if (willDelete) {
                  window.open('waste_disposal.php','_self')
                    }
                  });
                </script>";
    } else {

        echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
    }
}
?>




