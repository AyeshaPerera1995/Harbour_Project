<!--<div class="form-group">-->
<!--    <label class="col-form-label" for="inputWarning"> Input with-->
<!--        warning  <i class="fas fa-exclamation-circle"></i></label>-->
<!--    <input type="text" class="form-control is-warning" id="inputWarning" placeholder="Enter ...">-->
<!--</div>-->
<!DOCTYPE html>
<?php
session_start();
include_once 'build/PHP/DB.php';
$u_id = $_SESSION['user_id'];

if (isset($_GET['cd_id'])){
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
                        <h1 class="m-0 text-dark"> <i class="fas fa-suitcase"></i>     Cargo - Consignments</h1>
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
                                            <div class="col-sm-2">
                                            <?php
                                                $sel_c_decl = "SELECT * from cargo_declarations where idcargo_declarations='$cd_id'";
                                                $run_c_decl = mysqli_query($con, $sel_c_decl);
                                                while($row = mysqli_fetch_array($run_c_decl)){ 
                                                    $id = $cd_id;
                                                    $lrn = $row['LRN'];
                                                    $mrn = $row['MRN'];
                                                    $re_party = $row['reporting_party'];
                                                    $port = $row['first_port'];
                                                    $eta = $row['ETA_of_ENS'];
                                                
                                                ?>
                                                <div class="form-group">
                                                    <label >LRN</label>
                                                    <input type="hidden" name="id" value="<?php echo $id;?>">
                                                    <input type="text" class="form-control" value="<?php echo $lrn;?>" style="background-color: lightgrey;" disabled="">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label >MRN</label>
                                                    <input type="text" class="form-control" value="<?php echo $mrn;?>" style="background-color: lightgrey;" disabled="">                                           
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label >Reporting party (EOR)</label>
                                                    <input type="text" class="form-control" value="<?php echo $re_party;?>" style="background-color: lightgrey;" disabled="">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label >First port of arrival in EU</label>
                                                    <input type="text" class="form-control" value="<?php echo $port;?>" style="background-color: lightgrey;" disabled="">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label >ETA of ENS</label>
                                                    <input type="text" class="form-control" value="<?php echo $eta;?>" style="background-color: lightgrey;" disabled="">
                                                </div>
                                            </div>
                                            <?php 
                                                }
                                            ?>

                                            <h5 class="bg-danger" style="padding:5px; margin-top: 15px; margin-left:5px; border-radius:5px; font-weight: bold; width: 100%;">Add new consignment</h5>
                                            
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Port of loading</label>
                                                    <input type="text" class="form-control" name="port_loading">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Port of discharge</label>
                                                    <input type="text" class="form-control" name="port_discharge">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Transport document ID</label>
                                                    <input type="text" class="form-control" name="doc_id">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Number of items</label>
                                                    <input type="text" class="form-control" name="num_items">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >UCR</label>
                                                    <input type="text" class="form-control" name="ucr">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Place whence consigned</label>
                                                    <input type="text" class="form-control" name="place_consigned">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Goods receipt place</label>
                                                    <input type="text" class="form-control" name="gr_place">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Freight method of payment</label>
                                                    <input type="text" class="form-control" name="m_payment">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Number of the authorisation</label>
                                                    <input type="text" class="form-control" name="num_auth">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Additional information</label>
                                                    <input type="text" class="form-control" name="add_info">
                                                </div>
                                            </div>

                                            <h5 style="color: red;  width: 100%; padding:5px; margin-top: 5px; margin-left:3px; border-bottom: 0.5px solid red;">Carrier</h5>

                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Name</label>
                                                    <input type="text" class="form-control" name="carrier_name">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Street and Number</label>
                                                    <input type="text" class="form-control" name="carrier_street">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Postal code</label>
                                                    <input type="text" class="form-control" name="carrier_code">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >City</label>
                                                    <input type="text" class="form-control" name="carrier_city">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Country</label>
                                                    <input type="text" class="form-control" name="carrier_country">
                                                </div>
                                            </div>

                                            <h5 style="color: red;  width: 100%; padding:5px; margin-top: 5px; margin-left:3px; border-bottom: 0.5px solid red;">Consignor</h5>

                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Name</label>
                                                    <input type="text" class="form-control" name="consignor_name">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Street and Number</label>
                                                    <input type="text" class="form-control" name="consignor_street">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Postal code</label>
                                                    <input type="text" class="form-control" name="consignor_code">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >City</label>
                                                    <input type="text" class="form-control" name="consignor_city">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Country</label>
                                                    <input type="text" class="form-control" name="consignor_country">
                                                </div>
                                            </div>

                                            <h5 style="color: red;  width: 100%; padding:5px; margin-top: 5px; margin-left:3px; border-bottom: 0.5px solid red;">Consignee</h5>

                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Name</label>
                                                    <input type="text" class="form-control" name="consignee_name">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Street and Number</label>
                                                    <input type="text" class="form-control" name="consignee_street">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Postal code</label>
                                                    <input type="text" class="form-control" name="consignee_code">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >City</label>
                                                    <input type="text" class="form-control" name="consignee_city">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Country</label>
                                                    <input type="text" class="form-control" name="consignee_country">
                                                </div>
                                            </div>

                                            <h5 style="color: red;  width: 100%; padding:5px; margin-top: 5px; margin-left:3px; border-bottom: 0.5px solid red;">Party to be notified</h5>

                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Name</label>
                                                    <input type="text" class="form-control" name="p_name">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Street and Number</label>
                                                    <input type="text" class="form-control" name="p_street">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Postal code</label>
                                                    <input type="text" class="form-control" name="p_code">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >City</label>
                                                    <input type="text" class="form-control" name="p_city">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Country</label>
                                                    <input type="text" class="form-control" name="p_country">
                                                </div>
                                            </div>


                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label style="color: white;">E</label>
                                                    <button type="submit" name="upload_cc" class="btn btn-danger form-control"><i class="fas fa-upload"></i>   Upload</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                                <hr><br>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Port of loading</th>
                                        <th>Port of discharge</th>
                                        <th>Transport document ID</th>
                                        <th>View More</th>
                                        <th>Carrier</th>
                                        <th>Consignor</th>
                                        <th>Consignee</th>
                                        <th>Party to be notified</th>
                                        <th>View/Add Cargo</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                $get_consign = "SELECT * from consignments where cargo_declarations_idcargo_declarations='$cd_id'";
                                $run_consign = mysqli_query($con, $get_consign);
                                while ($row = mysqli_fetch_array($run_consign)) { 
                                    $con_id = $row['idconsignments'];                                            
                                    $port_load = $row['port_of_loading'];
                                    $port_dis = $row['port_of_discharge'];
                                    $doc_id = $row['transport_doc_id'];

                                    $carrier_id = $row['carrier_idcarrier'];
                                    $consignor_id = $row['consignor_idconsignor'];
                                    $consignee_id = $row['consignee_idconsignee'];
                                    $party_id = $row['id_party_notified'];
                                            
                                    ?>

                                    <tr>
                                        <td><?php echo $port_load;?></td>
                                        <td><?php echo $port_dis;?></td>
                                        <td><?php echo $doc_id;?></td>
                                        <td><a href="#myConsignment" class="btn btn-danger btn-sm" data-toggle="modal" data-id="<?php echo $con_id;?>">View More</a></td>
                                        <td><a href="#myCarrier" data-toggle="modal" data-id="<?php echo $carrier_id;?>"class="btn btn-sm btn-dark">Carrier</a></td>
                                        <td><a href="#myConsignor" data-toggle="modal" data-id="<?php echo $consignor_id;?>"class="btn btn-sm btn-dark">Consignor</a></td>
                                        <td><a href="#myConsignee" data-toggle="modal" data-id="<?php echo $consignee_id;?>"class="btn btn-sm btn-dark">Consignee</a></td>
                                        <td><a href="#myParty" data-toggle="modal" data-id="<?php echo $party_id;?>"class="btn btn-sm btn-dark">Party to be notified</a></td>
                                        <td><a href="cargo_cargoitems.php?con_id=<?php echo $con_id;?>&cd_id=<?php echo $cd_id;?>" class="btn btn-sm btn-dark">View/Add Cargos</a></td>
                                    </tr>
                                    <?php
                                        }
                                    ?>

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Port of loading</th>
                                        <th>Port of discharge</th>
                                        <th>Transport document ID</th>
                                        <th>View More</th>
                                        <th>Carrier</th>
                                        <th>Consignor</th>
                                        <th>Consignee</th>
                                        <th>Party to be notified</th>
                                        <th>View/Add Cargo</th>
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

<!-- ********************************************************************************* -->
<script>
    $(document).ready(function(){
    $('#myConsignment').on('show.bs.modal', function (e) {
        var cid = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'post',
            url : 'model.php', //Here you will fetch records 
            data :  'cid='+ cid, //Pass $id
            success : function(data){
            $('.fetched-data').html(data);//Show fetched data from database
            }
        });
     });
});
</script>
<!-- ******************************************************************************** -->
<script>
    $(document).ready(function(){
    $('#myCarrier').on('show.bs.modal', function (e) {
        var carr_id = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'post',
            url : 'carrier.php', //Here you will fetch records 
            data :  'carr_id='+ carr_id, //Pass $id
            success : function(data){
            $('.fetched-data').html(data);//Show fetched data from database
            }
        });
     });
});
</script>

<!-- ******************************************************************************** -->
<script>
    $(document).ready(function(){
    $('#myConsignor').on('show.bs.modal', function (e) {
        var consignor_id = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'post',
            url : 'consignor.php', //Here you will fetch records 
            data :  'consignor_id='+ consignor_id, //Pass $id
            success : function(data){
            $('.fetched-data').html(data);//Show fetched data from database
            }
        });
     });
});
</script>

<!-- ******************************************************************************** -->
<script>
    $(document).ready(function(){
    $('#myConsignee').on('show.bs.modal', function (e) {
        var consignee_id = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'post',
            url : 'consignee.php', //Here you will fetch records 
            data :  'consignee_id='+ consignee_id, //Pass $id
            success : function(data){
            $('.fetched-data').html(data);//Show fetched data from database
            }
        });
     });
});
</script>

<!-- ******************************************************************************** -->
<script>
    $(document).ready(function(){
    $('#myParty').on('show.bs.modal', function (e) {
        var party_id = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'post',
            url : 'party.php', //Here you will fetch records 
            data :  'party_id='+ party_id, //Pass $id
            success : function(data){
            $('.fetched-data').html(data);//Show fetched data from database
            }
        });
     });
});
</script>

<!-- ******************************************************************************** -->


</body>
</html>


<?php 

if(isset($_POST['upload_cc'])){

    $id = $_POST['id'];
    $port_loading= $_POST['port_loading'];
    $port_discharge= $_POST['port_discharge'];
    $doc_id= $_POST['doc_id'];
    $num_items= $_POST['num_items'];
    $ucr= $_POST['ucr'];
    $place_consigned= $_POST['place_consigned'];
    $gr_place= $_POST['gr_place'];
    $m_payment= $_POST['m_payment'];
    $num_auth= $_POST['num_auth'];
    $add_info= $_POST['add_info'];

    $carr_name= $_POST['carrier_name'];
    $carr_street= $_POST['carrier_street'];
    $carr_code= $_POST['carrier_code'];
    $carr_city= $_POST['carrier_city'];
    $carr_country= $_POST['carrier_country'];

    $consignor_name= $_POST['consignor_name'];
    $consignor_street= $_POST['consignor_street'];
    $consignor_code= $_POST['consignor_code'];
    $consignor_city= $_POST['consignor_city'];
    $consignor_country= $_POST['consignor_country'];

    $consignee_name= $_POST['consignee_name'];
    $lrconsignee_street= $_POST['consignee_street'];
    $consignee_code= $_POST['consignee_code'];
    $consignee_city= $_POST['consignee_city'];
    $consignee_country= $_POST['consignee_country'];

    $p_name= $_POST['p_name'];
    $p_street= $_POST['p_street'];
    $p_code= $_POST['p_code'];
    $p_city= $_POST['p_city'];
    $p_country= $_POST['p_country'];

    // save carrier
    $carrier_sql = "INSERT INTO carrier (name,postal_code,street_number,city,country) "
        . "values('$carr_name','$carr_street','$carr_code','$carr_city','$carr_country')";
    if(mysqli_query($con, $carrier_sql)){
        echo "<script>alert('carrier ok')</script>";
        $get_carrier = "select idcarrier from carrier order by idcarrier DESC LIMIT 1";
        $run_carrier = mysqli_query($con, $get_carrier);
        $arow = mysqli_fetch_assoc($run_carrier);
        $carrier_id = $arow['idcarrier'];
        
    // save consignor
    $consignor_sql = "INSERT INTO consignor (name,postal_code,street_number,city,country) "
        . "values('$consignor_name','$consignor_street','$consignor_code','$consignor_city','$consignor_country')";
    if(mysqli_query($con, $consignor_sql)){
        echo "<script>alert('consignor ok')</script>";
        $get_consignor = "select idconsignor from consignor order by idconsignor DESC LIMIT 1";
        $run_consignor = mysqli_query($con, $get_consignor);
        $brow = mysqli_fetch_assoc($run_consignor);
        $consignor_id = $brow['idconsignor'];
            
    // save consignee
    $consignee_sql = "INSERT INTO consignee (name,postal_code,street_number,city,country) "
            . "values('$consignee_name','$consignee_street','$consignee_code','$consignee_city','$consignee_country')";
    if(mysqli_query($con, $consignee_sql)){
        echo "<script>alert('consignee ok')</script>";
        $get_consignee = "select idconsignee from consignee order by idconsignee DESC LIMIT 1";
        $run_consignee = mysqli_query($con, $get_consignee);
        $crow = mysqli_fetch_assoc($run_consignee);
        $consignee_id = $crow['idconsignee'];
                
    // save party notified            
    $party_sql = "INSERT INTO party_notified (name,postal_code,street_number,city,country) "
        . "values('$p_name','$p_street','$p_code','$p_city','$p_country')";
    if(mysqli_query($con, $party_sql)){
        echo "<script>alert('Party notified ok')</script>";
        $get_party = "select id_party_notified from party_notified order by id_party_notified DESC LIMIT 1";
        $run_party = mysqli_query($con, $get_party);
        $drow = mysqli_fetch_assoc($run_party);
        $pn_id = $drow['id_party_notified'];

    // save consignment details
    $consignments_sql = "INSERT INTO consignments (port_of_loading,port_of_discharge,transport_doc_id,number_of_items,UCR,place_whence_consigned,goods_receipt_place,freight_method_of_payment,number_of_authorisation,additional_info,carrier_idcarrier,consignor_idconsignor,consignee_idconsignee,id_party_notified,cargo_declarations_idcargo_declarations) "
    . "values('$port_loading','$port_discharge','$doc_id','$num_items','$ucr','$place_consigned','$gr_place','$m_payment','$num_auth','$add_info','$carrier_id','$consignor_id','$consignee_id','$pn_id','$id')";

    if (mysqli_query($con, $consignments_sql)) {
        echo "<script>
                swal({
                    type: 'success',
                    title:'New Consignment Uploaded',
                    showConfirmButton: true,
                    confirmButtonText: 'OK'
                })
                .then(willDelete => {
                  if (willDelete) {
                window.open('cargo_consign.php?cd_id=$id','_self')
                  }
                });
                </script>";
    } else {
        echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
    }
    // end save consignment details

    }else{
        echo "Error in Party Notified : " . $party_sql . "<br>" . mysqli_error($con);
    }

    }else{
        echo "Error in Consignee : " . $consignee_sql . "<br>" . mysqli_error($con);
    }

    }else{
        echo "Error in Consignor : " . $consignor_sql . "<br>" . mysqli_error($con);
    }

    }else{
        echo "Error in Carrier : " . $carrier_sql . "<br>" . mysqli_error($con);
    }



}

?>


<!-- ********************************** Consignments ************************************** -->
<div class="modal small fade" id="myConsignment" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h3 class="modal-title">Consignment Information</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>                
            </div>
            <div class="modal-body">
                <div class="fetched-data"></div>
            </div>
            <div class="modal-footer">
                <button type="submit" name="edit_consignment" onclick="" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- ***************************************** Carrier *************************************** -->

<div class="modal small fade" id="myCarrier" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h3 class="modal-title">Carrier Information</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>                
            </div>
            <div class="modal-body">
                <div class="fetched-data"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- ************************************** Consignor ****************************************** -->

<div class="modal small fade" id="myConsignor" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h3 class="modal-title">Consignor Information</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>                
            </div>
            <div class="modal-body">
                <div class="fetched-data"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- *************************************** Consignee ***************************************** -->

<div class="modal small fade" id="myConsignee" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h3 class="modal-title">Consignee Information</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>                
            </div>
            <div class="modal-body">
                <div class="fetched-data"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- ************************************** Party ****************************************** -->

<div class="modal small fade" id="myParty" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h3 class="modal-title">Party to be Notified</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>                
            </div>
            <div class="modal-body">
                <div class="fetched-data"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- ******************************************************************************** -->