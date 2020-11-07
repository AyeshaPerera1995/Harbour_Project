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
                            <a href="#" class="d-block"><?php echo $_SESSION['user_email']; ?></a>
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
                                Dashboard

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
                                Register Ship

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
                                <h1 class="m-0 text-dark"> <i class="fas fa-heartbeat"></i>     Health / Ill Persons</h1>
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
                                    <h5 class="bg-gradient-maroon" style="padding:5px; margin-top: 15px; margin-left:20px; border-radius:5px; font-weight: bold; width: 97%;">Ill persons details</h5>

                                    <form role="form" action="ill_persons.php" method="post">
                                        <div class="card-body">
                                            <div role="form">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label >ID</label>
                                                            <input type="text" class="form-control" name="id">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label >Crew or Passenger</label>
                                                            <select class="form-control" name="c_p">
                                                                <option value="Crew">Crew</option>
                                                                <option value="Passenger">Passenger</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label >Family name</label>
                                                            <input type="text" class="form-control" name="familyname">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label>Given name</label>
                                                            <input type="text" class="form-control" name="givenname">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label >Sex</label>
                                                            <select class="form-control" name="sex">
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label>Nature of illness</label>
                                                            <input type="text" class="form-control" name="nature">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label>Reported to port medical</label>
                                                            <select class="form-control" name="portmedical">
                                                                <option value="Yes">Yes</option>
                                                                <option value="No">No</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label style="color:white;">R</label>
                                                            <button type="submit" name="ill_upload" class="form-control bg-gradient-maroon"><i class="fas fa-plus"></i>   Upload & Add to table</button>                                          
                                                        </div>
                                                    </div>  

                                                </div>
                                                <hr>
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Crew or Passenger</th>
                                                            <th>Family name</th>
                                                            <th>Given name</th>
                                                            <th>Sex</th>
                                                            <th>Nature of illness</th>
                                                            <th>Reported to port medical</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $get_health = "select idhealth from health order by idhealth DESC LIMIT 1";
                                                        $r_health = mysqli_query($con, $get_health);
                                                        $row_health = mysqli_fetch_assoc($r_health);
                                                        $health_id = $row_health['idhealth'];
                                                        
                                                        $sel_ss = "SELECT * from ill_person where health_idhealth='$health_id'";
                                                        $run_ss = mysqli_query($con, $sel_ss);
                                                        while ($row = mysqli_fetch_array($run_ss)) {
                                                            $idill_person = $row['idill_person'];
                                                            $crew_or_passenger = $row['crew_or_passenger'];
                                                            $id = $row['id'];
                                                            $family_name = $row['family_name'];
                                                            $given_name = $row['given_name'];
                                                            $sex = $row['sex'];
                                                            $nature_of_illness = $row['nature_of_illness'];
                                                            $isreported_to_port_medical = $row['isreported_to_port_medical'];
                                                            $current_statusl = $row['c_status'];
                                                            $health_idhealth = $row['health_idhealth'];
                                                            ?>
                                                            <tr>
                                                                <td><?php echo "$id"; ?></td>
                                                                <td><?php echo "$crew_or_passenger"; ?></td>
                                                                <td><?php echo "$family_name"; ?></td>
                                                                <td><?php echo "$given_name"; ?></td>
                                                                <td><?php echo "$sex"; ?></td>
                                                                <td><?php echo "$nature_of_illness"; ?></td>
                                                                <td><?php echo "$isreported_to_port_medical"; ?></td>
                                                                <td><?php echo "$current_statusl"; ?></td>
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
if (isset($_POST['ill_upload'])) {

    $id = $_POST['id'];
    $c_p = $_POST['c_p'];
    $familyname = $_POST['familyname'];
    $givenname = $_POST['givenname'];
    $sex = $_POST['sex'];
    $nature = $_POST['nature'];
    $portmedical = $_POST['portmedical'];

    $get_health = "select idhealth from health order by idhealth DESC LIMIT 1";
    $r_health = mysqli_query($con, $get_health);
    $row_health = mysqli_fetch_assoc($r_health);
    $health_id = $row_health['idhealth'];

    $sql2 = "INSERT INTO ill_person (crew_or_passenger,id,family_name,given_name,sex,nature_of_illness,isreported_to_port_medical,c_status,health_idhealth) "
            . "values('$c_p','$id','$familyname','$givenname','$sex','$nature','$portmedical','1','$health_id')";

    if (mysqli_query($con, $sql2)) {
        echo "<script>
    			swal({
                    type: 'success',
                    title:'Ill Person Added',
                    showConfirmButton: true,
                    confirmButtonText: 'OK'
                })
                .then(willDelete => {
  				if (willDelete) {
    			window.open('ill_persons.php','_self')
  				}
				});
                </script>";
    } else {

        echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
    }
}
?>




