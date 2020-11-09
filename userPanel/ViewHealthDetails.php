<!DOCTYPE html>
<?php
session_start();
include_once 'build/PHP/DB.php';
$u_id = 4;
if (isset($_GET['health'])) {
    $healthid = $_GET['health'];
}
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
                                <h1 class="m-0 text-dark"> <i class="fas fa-bookmark"></i>     View Notifications</h1>
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
                                    <h5 class="bg-danger" style="padding:5px; margin-top: 15px; margin-left:20px; border-radius:5px; font-weight: bold; width: 97%;">Notification Details</h5>

                                    <form role="form" action="ill_persons.php" method="post">
                                        <div class="card-body">
                                            <div role="form">
                                                <hr>
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Valid Sanitation Control Exemption</th>
                                                            <th>Certificate Issued at</th>
                                                            <th>Date of Issue</th>
                                                            <th>Reinspection Required</th>
                                                            <th>Visited Infected Area</th>
                                                            <th>Disease Onboard</th>
                                                            <th>Infection Condition Onboard</th>
                                                            <th>Medical Consulted</th>
                                                            <th>Sick Animal Onboard</th>
                                                            <th>Any Person Died</th>
                                                            <th>Number of Deaths</th>
                                                            <th>Any Ill Person</th>
                                                            <th>Number of Ill Persons</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $health_ss = "SELECT * from health where idhealth='$healthid'";
                                                        $healthh_ss = mysqli_query($con, $health_ss);
                                                        while ($row = mysqli_fetch_array($healthh_ss)) {
                                                            $valid_sanitation_control_exemption = $row['valid_sanitation_control_exemption'];
                                                            $certificate_issued_at = $row['certificate_issued_at'];
                                                            $date_of_issue = $row['date_of_issue'];
                                                            $reinspection_required = $row['reinspection_required'];
                                                            $visited_infected_area = $row['visited_infected_area'];
                                                            $disease_onboard = $row['disease_onboard'];
                                                            $infection_condition_onboard = $row['infection_condition_onboard'];
                                                            $medical_consulted = $row['medical_consulted'];
                                                            $sick_animal_onboard = $row['sick_animal_onboard'];
                                                            $any_person_died = $row['any_person_died'];
                                                            $number_of_deaths = $row['number_of_deaths'];
                                                            $any_ill_person = $row['any_ill_person'];
                                                            $number_of_ill_persons = $row['number_of_ill_persons'];
                                                            ?>
                                                            <tr>
                                                                <td><?php echo "$valid_sanitation_control_exemption"; ?></td>
                                                                <td><?php echo "$certificate_issued_at"; ?></td>
                                                                <td><?php echo "$date_of_issue"; ?></td>
                                                                <td><?php echo "$reinspection_required"; ?></td>
                                                                <td><?php echo "$visited_infected_area"; ?></td>
                                                                <td><?php echo "$disease_onboard"; ?></td>
                                                                <td><?php echo "$infection_condition_onboard"; ?></td>
                                                                <td><?php echo "$medical_consulted"; ?></td>
                                                                <td><?php echo "$sick_animal_onboard"; ?></td>
                                                                <td><?php echo "$any_person_died"; ?></td>
                                                                <td><?php echo "$number_of_deaths"; ?></td>
                                                                <td><?php echo "$any_ill_person"; ?></td>
                                                                <td><?php echo "$number_of_ill_persons"; ?></td>
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