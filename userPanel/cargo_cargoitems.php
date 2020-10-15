<!DOCTYPE html>
<?php
session_start();
include_once 'build/PHP/DB.php';

if (isset($_GET['con_id']) && isset($_GET['cd_id']) ){
    $con_id = $_GET['con_id'];
    $cd_id = $_GET['cd_id'];
    
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
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
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
                        <h1 class="m-0 text-dark"> <i class="fas fa-suitcase"></i>     Cargo - Cargo Items</h1>
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
                        <div class="card card-success">
                            <h5 class="bg-danger" style="padding:5px; margin-top: 15px; margin-left:20px; border-radius:5px; font-weight: bold; width: 97%;">Cargo Declaration</h5>
                                <div class="card-body">
                                    <form role="form" action="" method="post">
                                    <div role="form">
                                        <div class="row">
                                        <?php
                                                $sel_c_decl = "SELECT * from cargo_declarations where idcargo_declarations='$cd_id'";
                                                $run_c_decl = mysqli_query($con, $sel_c_decl);
                                                $row = mysqli_fetch_assoc($run_c_decl);
                                                    $id = $row['idcargo_declarations'];
                                                    $lrn = $row['LRN'];
                                                    $mrn = $row['MRN'];
                                                    $re_party = $row['reporting_party'];
                                                
                                        ?>
                                        <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >LRN</label>
                                                    <input type="text" class="form-control" disabled value="<?php echo $lrn;?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >MRN</label>
                                                    <input type="text" class="form-control" disabled value="<?php echo $mrn;?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Reporting party (EOR)</label>
                                                    <input type="text" class="form-control" disabled value="<?php echo $re_party;?>">
                                                </div>
                                            </div>
                                            
                                            <h5 class="bg-danger" style="padding:5px; margin-top: 15px; margin-left:5px; border-radius:5px; font-weight: bold; width: 100%;">Consignment</h5>
                                            <?php
                                $get_consign = "SELECT * from consignments where idconsignments='$con_id'";
                                $run_consign = mysqli_query($con, $get_consign);
                                $row = mysqli_fetch_assoc($run_consign);     
                                    $conid = $row['idconsignments'];                                    
                                    $port_load = $row['port_of_loading'];
                                    $port_dis = $row['port_of_discharge'];
                                    $doc_id = $row['transport_doc_id'];                                     
                                    ?>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Port of loading</label>
                                                    <input type="text" class="form-control" value="<?php echo $port_load;?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Port of discharge</label>
                                                    <input type="text" class="form-control" value="<?php echo $port_dis;?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Transport document ID</label>
                                                    <input type="text" class="form-control" value="<?php echo $doc_id;?>" disabled>
                                                </div>
                                            </div>
                                   
                                            <h5 class="bg-danger" style="padding:5px; margin-top: 15px; margin-left:5px; border-radius:5px; font-weight: bold; width: 100%;">Add new cargo items</h5>
                                            
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Name</label>
                                                    <input type="text" class="form-control" name="name">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Nb. of packages</label>
                                                    <input type="number" class="form-control" name="n_packs">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Kind of packages</label>
                                                    <input type="text" class="form-control" name="k_packs">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Description of goods</label>
                                                    <input type="text" class="form-control" name="desc">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Textual reference</label>
                                                    <input type="text" class="form-control" name="t_ref">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >IMO class</label>
                                                    <input type="text" class="form-control" name="imo">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Gross qty</label>
                                                    <input type="number" class="form-control" name="g_qty">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Net qty</label>
                                                    <input type="number" class="form-control" name="n_qty">
                                                </div>
                                            </div>

                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label style="color: white;">E</label>
                                                    <button type="submit" name="upload_cargo" class="btn btn-danger form-control"><i class="fas fa-upload"></i>   Upload Cargo</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    </form>
                                        <hr><br>
                
                                          
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Nb. of packages</th>
                                                <th>Kind of packages</th>
                                                <th>Description of goods</th>
                                                <th>Textual reference</th>
                                                <th>IMO class</th>
                                                <th>Gross qty</th>
                                                <th>Net qty</th> 
                                                <th>Action</th>                                              
                                            </tr>
                                            </thead>
                                        
                                            <tbody>
                                                <?php
                                                $sel_cargo = "SELECT * from cargo_details where consignment_details_idconsignment_details='$con_id'";
                                                $run_cargo = mysqli_query($con, $sel_cargo);
                                                while ($row = mysqli_fetch_array($run_cargo)) {   
                                                    $cargo_id = $row['idcargo_details'];                                          
                                                    $name = $row['name'];
                                                    $n_pack = $row['nb_of_packages'];
                                                    $k_pack = $row['kind_of_packages'];
                                                    $desc = $row['desc_of_goods'];
                                                    $t_ref = $row['textual_reference'];
                                                    $imo = $row['IMO_class'];
                                                    $g_qty = $row['gross_qty'];
                                                    $n_qty = $row['net_qty'];
                                                
                                                ?>
                                                
                                            <tr>
                                                <td><?php echo "$name";?></td>
                                                <td><?php echo "$n_pack";?></td>
                                                <td><?php echo "$k_pack";?></td>
                                                <td><?php echo "$desc";?></td>
                                                <td><?php echo "$t_ref";?></td>
                                                <td><?php echo "$imo";?></td>
                                                <td><?php echo "$g_qty";?></td>
                                                <td><?php echo "$n_qty";?></td>                                                                                   
                                                <td><a href="delete_cargo_item.php?cargo_id=<?php echo $cargo_id;?>&con_id=<?php echo $con_id;?>&cd_id=<?php echo $cd_id;?>" class="btn btn-dark btn-sm">Delete</a></td>
                                                
                                            </tr>

                                        <?php
                                                }
                                        ?>
                                        
                                            </tbody>
                                            
                                            <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Nb. of packages</th>
                                                <th>Kind of packages</th>
                                                <th>Description of goods</th>
                                                <th>Textual reference</th>
                                                <th>IMO class</th>
                                                <th>Gross qty</th>
                                                <th>Net qty</th> 
                                                <th>Action</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    
                                    </div>
                                </div>  <!-- /.card-body -->

                        </div>
                        <!-- /.card -->

                    </div>  <!--    col-d-12-->

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

if (isset($_POST['upload_cargo'])) {
// echo "<script>alert($con_id);</script>";
$cd_id = $id;
$con_id = $conid;

$name= $_POST['name'];
$n_packs= $_POST['n_packs'];
$k_packs= $_POST['k_packs'];
$t_ref= $_POST['t_ref'];
$desc = $_POST['desc'];
$imo = $_POST['imo'];
$g_qty = $_POST['g_qty'];
$n_qty = $_POST['n_qty'];

$sql2 = "INSERT INTO cargo_details (name,nb_of_packages,kind_of_packages,desc_of_goods,textual_reference,IMO_class,gross_qty,net_qty,consignment_details_idconsignment_details) "
        . "values('$name','$n_packs','$k_packs','$t_ref','$desc','$imo','$g_qty','$n_qty','$con_id')";

    if (mysqli_query($con, $sql2)) {

        echo "<script>
    			swal({
                    type: 'success',
                    title:'New Cargo Item Added',
                    showConfirmButton: true,
                    confirmButtonText: 'OK'
                })
                .then(willDelete => {
  				if (willDelete) {
    			window.open('cargo_cargoitems.php?con_id=$con_id&cd_id=$cd_id','_self')
  				}
				});
                </script>";
    } else {
        echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
    }

}


?>








