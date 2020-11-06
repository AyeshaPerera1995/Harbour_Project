<!DOCTYPE html>
<?php
session_start();
include_once 'build/PHP/DB.php';

if (isset($_GET['nid'])) {
    $nid = $_GET['nid'];
    // echo "<script>alert($nid);</script>";
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
        <a href="home.php" class="brand-link">
            <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Admin Panel</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info">
                    <a href="#" class="d-block"><?php echo $_SESSION['admin_email'];?></a>
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
                    <li class="nav-item">
                        <a href="to_aprove.php" class="nav-link">
                            <i class="nav-icon fas fa-ship"></i>
                            <p>
                                Pending Ship List

                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="aproved.php" class="nav-link">
                            <i class="nav-icon fas fa-life-ring"></i>
                            <p>
                                Approved Ship List

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
                        <h3 class="m-0 text-dark">View Ship Notification Details</h3><hr>
                        <h5 style="color:red; font-weight:bold;">Notification ID : <?php echo $nid;?></h5>
                    </div><!-- /.col -->
                    <div class="col-sm-6">

                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <center>
                <div class="row">

                    <div class="col-md-2 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-gradient-gray"><i class="fas fa-ship"></i></span>

                            <div class="info-box-content">
                                <span style="font-size: 25px;" class="info-box-number"><a style="color: black; cursor: pointer;" href="#ship" data-toggle="tab">Ship </a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-gradient-gray"><i class="fas fa-anchor"></i></span>

                            <div class="info-box-content">
                                <span style="font-size: 25px;" class="info-box-number"><a style="color: black; cursor: pointer;" href="#port" data-toggle="tab">Port </a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-gradient-gray"><i class="fas fa-flag-checkered"></i></span>

                            <div class="info-box-content">
                                <span style="font-size: 25px;" class="info-box-number"><a style="color: black; cursor: pointer;" href="#voyage" data-toggle="tab">Voyage </a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-gradient-gray"><i class="fas fa-clipboard-list"></i></span>

                            <div class="info-box-content">
                                <span style="font-size: 25px;" class="info-box-number"><a style="color: black; cursor: pointer;" href="#psc" data-toggle="tab">PSC </a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-gradient-gray"><i class="fas fa-dumpster-fire"></i></span>

                            <div class="info-box-content">
                                <span style="font-size: 25px;" class="info-box-number"><a style="color: black; cursor: pointer;" href="#dpg" data-toggle="tab">DPG </a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-gradient-gray"><i class="fas fa-suitcase"></i></span>

                            <div class="info-box-content">
                                <span style="font-size: 25px;" class="info-box-number"><a style="color: black; cursor: pointer;" href="#cargo" data-toggle="tab">Cargo </a></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-gradient-gray"><i class="fas fa-box-open"></i></span>

                            <div class="info-box-content">
                                <span style="font-size: 25px;" class="info-box-number"><a style="color: black; cursor: pointer;" href="#stores" data-toggle="tab">Stores </a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-gradient-gray"><i class="fas fa-trash-alt"></i></span>

                            <div class="info-box-content">
                                <span style="font-size: 25px;" class="info-box-number"><a style="color: black; cursor: pointer;" href="#waste" data-toggle="tab">Waste </a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-gradient-gray"><i class="fas fa-lock-open"></i></span>

                            <div class="info-box-content">
                                <span style="font-size: 25px;" class="info-box-number"><a style="color: black; cursor: pointer;" href="#security" data-toggle="tab">Security </a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-gradient-gray"><i class="fas fa-users"></i></span>

                            <div class="info-box-content">
                                <span style="font-size: 25px;" class="info-box-number"><a style="color: black; cursor: pointer;" href="#crew" data-toggle="tab">Crew </a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-gradient-gray"><i class="fas fa-user-friends"></i></span>

                            <div class="info-box-content">
                                <span style="font-size: 22px;" class="info-box-number"><a style="color: black; cursor: pointer;" href="#passengers" data-toggle="tab">Passengers </a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-gradient-gray"><i class="fas fa-heartbeat"></i></span>

                            <div class="info-box-content">
                                <span style="font-size: 25px;" class="info-box-number"><a style="color: black; cursor: pointer;" href="#health" data-toggle="tab">Health </a></span>
                            </div>
                        </div>
                    </div>


                </div>
                    <?php

                    // $nid = $_SESSION["nid"];
                    $sid = $_SESSION["ship_id"];
                    ?>

                    <div class="tab-content">
                        <div class="tab-pane fade" id="ship"><hr><br>
                            <h4><b>Ship Information...</b></h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- general form elements -->
                                    <div class="card card-info">
                                        <h5 class="bg-info" style="padding:5px; margin-top: 15px; margin-left:20px; border-radius:5px; font-weight: bold; width: 97%;">Ship information</h5>

                                        <?php
                                        $ship = "select * from ship where idship=$sid";
                                        $shipp = mysqli_query($con, $ship);
                                        $row = mysqli_fetch_array($shipp);
                                        $id = $row['idship'];
                                        $ship_name = $row['ship_name'];
                                        $ship_desc = $row['ship_desc'];
                                        $call_sign = $row['call_sign'];
                                        $IMO_number = $row['IMO_number'];
                                        $MMSI_number = $row['MMSI_number'];
                                        $flag = $row['flag'];
                                        $ship_type = $row['ship_type'];
                                        $g_tonnage = $row['gross_tonnage'];
                                        $n_tonnage = $row['net_tonnage'];
                                        $port = $row['certify_port'];
                                        $date = $row['certify_date'];
                                        $number = $row['certify_number'];
                                        $company = $row['company'];
                                        $c_email = $row['c_email'];
                                        $c_phone = $row['c_phone'];
                                        $y_built = $row['year_of_built'];
                                        $length = $row['length_overall'];
                                        $weight = $row['dead_weight']
                                        ?>

                                            <div class="card-body">
                                                <div role="form">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label>Ship Name</label>
                                                                <input type="text" disabled class="form-control" value="<?php echo $ship_name;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label>Call Sign</label>
                                                                <input type="text" disabled class="form-control" value="<?php echo $call_sign;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label>IMO Number</label>
                                                                <input type="text" disabled class="form-control" value="<?php echo $IMO_number;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label>MMSI Number</label>
                                                                <input type="text" disabled class="form-control" value="<?php echo $MMSI_number;?>">
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label >Any other information related to ship identity</label>
                                                                <input type="text" disabled class="form-control" value="<?php echo $ship_desc;?>">
                                                            </div>
                                                        </div>

                                                        <h5 class="bg-info" style="padding:5px; margin-top: 15px; margin-left:5px; border-radius:5px; font-weight: bold; width: 100%;">Ship particulars</h5>

                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label >Flag State</label>
                                                                <input type="text" disabled class="form-control" value="<?php echo $flag;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label >Ship Type</label>
                                                                <input type="text" disabled class="form-control" value="<?php echo $ship_type;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Gross Tonnage</label>
                                                                <input type="text" disabled class="form-control" value="<?php echo $g_tonnage;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Net Tonnage</label>
                                                                <input type="text" disabled class="form-control" value="<?php echo $n_tonnage;?>">
                                                            </div>
                                                        </div>

                                                        <h5 class="bg-info" style="padding:5px; margin-top: 15px; margin-left:5px; border-radius:5px; font-weight: bold; width: 100%;">Certificate of registry</h5>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label >Port</label>
                                                                <input type="text" disabled class="form-control" value="<?php echo $port;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label>Date</label>
                                                                <input type="text" disabled class="form-control" value="<?php echo $date;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label>Number</label>
                                                                <input type="text" disabled class="form-control" value="<?php echo $number;?>">
                                                            </div>
                                                        </div>

                                                        <h5 class="bg-info" style="padding:5px; margin-top: 15px; margin-left:5px; border-radius:5px; font-weight: bold; width: 100%;">Company</h5>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label>Company Name</label>
                                                                <input type="text" disabled class="form-control" value="<?php echo $company;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label>Email</label>
                                                                <input type="text" disabled class="form-control" value="<?php echo $c_email;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label>Phone</label>
                                                                <input type="text" disabled class="form-control" value="<?php echo $c_phone;?>">
                                                            </div>
                                                        </div>

                                                        <h5 class="bg-info" style="padding:5px; margin-top: 15px; margin-left:5px; border-radius:5px; font-weight: bold; width: 100%;">Additional ship particulars</h5>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label>Year of built</label>
                                                                <input type="text" disabled class="form-control" value="<?php echo $y_built;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label>Length overall</label>
                                                                <input type="text" disabled class="form-control" value="<?php echo $length;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label>Dead weight</label>
                                                                <input type="text" disabled class="form-control" value="<?php echo $weight;?>">
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->

                                    </div>
                                    <!-- /.card -->
                                </div>  <!--    col-d-12-->


                            </div>

                        </div>
                        <div class="tab-pane" id="port"><hr><br>
                            <h4><b>Port Information...</b></h4>
                            <?php
                            $port = "select * from port_details where notification_idnotification='$nid'";
                            $portt = mysqli_query($con,$port);
                            $p_row = mysqli_fetch_array($portt);
                            $ad = $p_row['arrival_departure'];
                            $p_call = $p_row['port_of_call'];
                            $eta = $p_row['ETA'];
                            $etd = $p_row['ETD'];
                            $ata = $p_row['ATA'];
                            $pur_call = $p_row['purpose_of_call'];
                            ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- general form elements -->
                                    <div class="card card-success">
                                        <h5 class="bg-success" style="padding:5px; margin-top: 15px; margin-left:20px; border-radius:5px; font-weight: bold; width: 97%;">Arrivel / Departure</h5>
                                            <div class="card-body">
                                                <div role="form">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Arrivel / Departure</label>
                                                                    <input type="text" class="form-control" disabled value="<?php echo $ad;?>">

                                                            </div>
                                                        </div>

                                                        <h5 class="bg-success" style="padding:5px; margin-top: 15px; margin-left:5px; border-radius:5px; font-weight: bold; width: 100%;">Port</h5>

                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label >Port of call</label>
                                                                <input type="text" class="form-control" disabled value="<?php echo $p_call;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label >ETA to port of call</label>
                                                                <input type="datetime-local" class="form-control" disabled value="<?php echo $eta;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>ETD from port of call</label>
                                                                <input type="datetime-local" class="form-control" disabled value="<?php echo $etd;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>ATA to port of call</label>
                                                                <input type="datetime-local" class="form-control" disabled value="<?php echo $ata;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Purpose of call</label>
                                                                <textarea class="form-control" disabled><?php echo $pur_call;?></textarea>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->

                                    </div>
                                    <!-- /.card -->
                                </div>  <!--    col-d-12-->


                            </div>

                        </div>
                        <div class="tab-pane" id="voyage"><hr><br>
                            <h4><b>Voyage Information...</b></h4>
                            <?php
                            $voyage = "select * from voyage_details where notification_idnotification='$nid'";
                            $voyagee = mysqli_query($con,$voyage);
                            $v_row = mysqli_fetch_array($voyagee);
                            $l_port = $v_row['last_port'];
                            $etd = $v_row['ETD_from_last_port'];
                            ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- general form elements -->
                                    <div class="card card-success">
                                        <h5 class="bg-warning" style="padding:5px; margin-top: 15px; margin-left:20px; border-radius:5px; font-weight: bold; width: 97%;">Last Port</h5>
                                            <div class="card-body">
                                                <div role="form">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label >Last Port</label>
                                                                <input type="text" class="form-control" disabled value="<?php echo $l_port;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label >ETD from last port</label>
                                                                <input type="datetime-local" class="form-control" disabled value="<?php echo $etd;?>">
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <!-- /.card -->
                                </div>  <!--    col-d-12-->


                            </div>

                        </div>
                        <div class="tab-pane" id="psc"><hr><br>
                            <h4><b>PSC Information...</b></h4>
                            <?php
                            $psc = "select * from psc_details where notification_idnotification='$nid'";
                            $pscc = mysqli_query($con,$psc);
                            $p_row = mysqli_fetch_array($pscc);
                            $ca = $p_row['call_at_anchorage'];
                            $oper = $p_row['planned_operations'];
                            $work = $p_row['planned_works'];
                            $sc = $p_row['ship_configuration'];
                            $vol = $p_row['volume_nature_of_cargo'];
                            $cond = $p_row['cargo_condition'];
                            ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- general form elements -->
                                    <div class="card card-success">
                                        <h5 class="bg-danger" style="padding:5px; margin-top: 15px; margin-left:20px; border-radius:5px; font-weight: bold; width: 97%;">Port State Control inspection information</h5>
                                            <div class="card-body">
                                                <div role="form">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label >Call at anchorage</label>
                                                                <input class="form-control" type="text" disabled value="<?php echo $ca;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label >Planned operations</label>
                                                                <textarea class="form-control" disabled><?php echo $oper;?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label >Planned works</label>
                                                                <textarea class="form-control" disabled><?php echo $work;?></textarea>
                                                            </div>
                                                        </div>

                                                        <h5 class="bg-danger" style="padding:5px; margin-top: 15px; margin-left:5px; border-radius:5px; font-weight: bold; width: 100%;">For tankers</h5>

                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label >Ship configuration</label>
                                                                <input class="form-control" type="text" disabled value="<?php echo $sc;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label >Volume and nature of cargo</label>
                                                                <textarea class="form-control" disabled><?php echo $vol;?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label>Condition of cargo and ballast tanks</label>
                                                                <textarea class="form-control" disabled><?php echo $cond;?></textarea>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <!-- /.card -->
                                </div>  <!--    col-d-12-->


                            </div>

                        </div>
                        <div class="tab-pane" id="dpg"><hr><br>
                            <h4><b>DPG Information...</b></h4>
                            <?php
                            $dpg = "select * from dpg_details where notification_idnotification='$nid'";
                            $dpgg = mysqli_query($con,$dpg);
                            $d_row = mysqli_fetch_array($dpgg);
                            $ship_clss = $d_row['INF_ship_class'];
                            $dpg = $d_row['dpg_list_status'];
                            $name = $d_row['name'];
                            $loc = $d_row['location'];
                            $phone = $d_row['phone'];
                            $mail = $d_row['email'];
                            ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- general form elements -->
                                    <div class="card card-success">
                                        <h5 class="bg-fuchsia" style="padding:5px; margin-top: 15px; margin-left:20px; border-radius:5px; font-weight: bold; width: 97%;">Dangerous and polluting goods</h5>
                                            <div class="card-body">
                                                <div role="form">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label >INF ship class</label>
                                                               <input type="text" class="form-control" disabled value="<?php echo $ship_clss;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label >DPG list on board</label>
                                                                <input type="text" class="form-control" disabled value="<?php echo $dpg;?>">
                                                            </div>
                                                        </div>

                                                        <h5 class="bg-fuchsia" style="padding:5px; margin-top: 15px; margin-left:5px; border-radius:5px; font-weight: bold; width: 100%;">Address from which detailed information on the polluting and dangerous cargo may be obtained</h5>

                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label >Name</label>
                                                                <input type="text" class="form-control" disabled value="<?php echo $name;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label >Location</label>
                                                                <input type="text" class="form-control" disabled value="<?php echo $loc;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label>Phone</label>
                                                                <input type="text" class="form-control" disabled value="<?php echo $phone;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label>Email</label>
                                                                <input type="text" class="form-control" disabled value="<?php echo $mail;?>">
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <!-- /.card -->
                                </div>  <!--    col-d-12-->


                            </div>

                        </div>
                        <div class="tab-pane" id="cargo"><hr><br>
                            <h4><b>Cargo Information...</b></h4>
                            <?php
                            $c_decl = "select * from cargo_declarations where notification_idnotification='$nid'";
                            $run_cdecl = mysqli_query($con,$c_decl);
                            $cd_row = mysqli_fetch_array($run_cdecl);
                            $decl_id = $cd_row['idcargo_declarations'];
                            $lrn = $cd_row['LRN'];
                            $mrn = $cd_row['MRN'];
                            $re_party = $cd_row['reporting_party'];
                            $f_port = $cd_row['first_port'];
                            $eta = $cd_row['ETA_of_ENS'];
                            ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-success">
                                    <h5 class="bg-danger" style="padding:5px; margin-top: 15px; margin-left:20px; border-radius:5px; font-weight: bold; width: 97%;">Cargo Declaration</h5>
                                    <div class="card-body">
                                    <form role="form" action="cargo_decl.php" method="post">
                                    <div role="form">
                                        <div class="row">
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
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >First port of arrival in EU</label>
                                                    <input type="text" class="form-control" disabled value="<?php echo $f_port;?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >ETA of ENS</label>
                                                    <input type="datetime-local" class="form-control" disabled value="<?php echo $eta;?>">
                                                </div>
                                            </div>

                                        </div>

<!-- ********************************************************************************** -->
                                <hr><br>
                                <h5 class="bg-danger" style="padding:5px; margin-top: 15px; margin-left:5px; border-radius:5px; font-weight: bold; width: 100%;">Consignments</h5>

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
                                $get_consign = "SELECT * from consignments where cargo_declarations_idcargo_declarations='$decl_id'";
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
                                        <td><a href="cargo_cargoitems.php?con_id=<?php echo $con_id;?>&cd_id=<?php echo $decl_id;?>" class="btn btn-sm btn-dark">View/Add Cargos</a></td>
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



<!-- ********************************************************************************************** -->

                                    </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </div>
                        <div class="tab-pane" id="stores"><hr><br>
                            <h4><b>Ship's Stores Information...</b></h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-success">
                                    <h5 class="bg-indigo" style="padding:5px; margin-top: 15px; margin-left:20px; border-radius:5px; font-weight: bold; width: 97%;">Ship's Stores Information</h5>
                                    <div class="card-body">
                                    <hr><br>
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th>Name of article</th>
                                                <th>Quantity</th>
                                                <th>Location on board</th>
                                               
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sel_ss = "SELECT * from ships_stores where notification_idnotification='$nid'";
                                                $run_ss = mysqli_query($con, $sel_ss);
                                                while ($row = mysqli_fetch_array($run_ss)) {                                             
                                                    $id = $row['idships_stores'];
                                                    $article = $row['name_of_article'];
                                                    $quantity = $row['quantity'];
                                                    $l_board = $row['location_on_board'];
                                                
                                                ?>
                                            <tr>
                                                <td><?php echo "$article";?></td>
                                                <td><?php echo "$quantity";?></td>
                                                <td><?php echo "$l_board";?></td>
                                                
                                            </tr>

                                        <?php
                                                }
                                        ?>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                            <th>Name of article</th>
                                                <th>Quantity</th>
                                                <th>Location on board</th>
                                               
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                        </div>
                        <div class="tab-pane" id="waste"><hr><br>
                            <h4><b>Waste Information...</b></h4>
                            <div class="row">
                            <div class="col-md-12">
                                <div class="card card-success">
                                    <h5 class="bg-danger" style="padding:5px; margin-top: 15px; margin-left:20px; border-radius:5px; font-weight: bold; width: 97%;">Cargo Declaration</h5>
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>
                        </div>

                        </div>
                        <div class="tab-pane" id="security"><hr><br>
                            <h4><b>Security Information...</b></h4>
                            <?php
                            $sec = "select * from security_details where notification_idnotification='$nid'";
                            $run_sec = mysqli_query($con,$sec);
                            $sec_row = mysqli_fetch_array($run_sec);
                            $issc_status = $sec_row['valid_ISSC_status'];
                            $valid_issc = $sec_row['reason_for_no_valid_ISSC'];
                            $i_type = $sec_row['ISSC_issuer_type'];
                            $issuer = $sec_row['ISSC_issuer'];
                            $type = $sec_row['ISSC_type'];
                            $ex_date = $sec_row['ISSC_expiry_date'];
                            $ssp = $sec_row['approved_SSP_on_board'];
                            $sec_level = $sec_row['security_level'];
                            $sec_mat = $sec_row['security_matters'];
                            $cso_name = $sec_row['CSO_name'];
                            $cso_phone = $sec_row['CSO_phone'];
                            $cso_email = $sec_row['CSO_email'];
                            ?>
                            <div class="row">
                            <div class="col-md-12">
                                <div class="card card-success">
                                <h5 class="bg-black" style="padding:5px; margin-top: 15px; margin-left:20px; border-radius:5px; font-weight: bold; width: 97%;">Security</h5>
                                  <div class="card-body">
                                    <div role="form">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label >Does the ship have a valid ISSC?</label>
                                                            <input type="text" class="form-control" disabled value="<?php echo $issc_status;?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label >Reason for no valid ISSC?</label>
                                                            <textarea class="form-control" disabled><?php echo $valid_issc;?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>ISSC issuer type</label>
                                                            <input type="text" class="form-control" disabled value="<?php echo $i_type;?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label >ISSC issuer</label>
                                                            <input type="text" class="form-control" disabled value="<?php echo $issuer;?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>ISSC type</label>
                                                            <input type="text" class="form-control" disabled value="<?php echo $type;?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label >ISSC expiry date</label>
                                                            <input type="date" class="form-control" disabled value="<?php echo $ex_date;?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label >Does the ship have an approved SSP on board?</label>
                                                            <input type="text" class="form-control" disabled value="<?php echo $ssp;?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label >Current ship security level</label>
                                                            <input type="text" class="form-control" disabled value="<?php echo $sec_level;?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Security-level matter</label>
                                                            <textarea class="form-control" name="Security_level_matter" disabled><?php echo $sec_mat;?></textarea>
                                                        </div>
                                                    </div>

                                                    <h5 class="bg-black" style="padding:5px; margin-top: 15px; margin-left:5px; border-radius:5px; font-weight: bold; width: 100%;">Company Security Officer</h5>

                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label >CSO Name</label>
                                                            <input type="text" class="form-control" disabled value="<?php echo $cso_name;?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label>CSO Phone</label>
                                                            <input type="number" class="form-control" disabled value="<?php echo $cso_phone;?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label>CSO Email</label>
                                                            <input type="email" class="form-control" disabled value="<?php echo $cso_email;?>">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </div>
                        <div class="tab-pane" id="crew"><hr><br>
                            <h4><b>Crew Information...</b></h4>
                            <div class="row">
                            <div class="col-md-12">
                                <div class="card card-success">
                                    <h5 class="bg-gradient-lightblue" style="padding:5px; margin-top: 15px; margin-left:20px; border-radius:5px; font-weight: bold; width: 97%;">Crew Information</h5>
                                    <div class="card-body">
                                    <hr>
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th>Family name</th>
                                                <th>Given name</th>
                                                <th>Nationality</th>
                                                <th>Job role</th>
                                                <th>Rank or Rating</th>
                                                <th>Visa/Residence Permit Number</th>
                                               
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sel_crew = "SELECT * from crew_person where notification_idnotification='$nid'";
                                                $run_crew = mysqli_query($con, $sel_crew);
                                                while ($row = mysqli_fetch_array($run_crew)) {                                             
                                                    $id = $row['idcrew_person'];
                                                    $fn = $row['family_name'];
                                                    $gn = $row['given_name'];
                                                    $nation = $row['nationality'];
                                                    $job = $row['job_role'];
                                                    $rank = $row['rank_or_rating'];
                                                    $number = $row['vr_permit_number'];
                                                
                                                ?>
                                            <tr>
                                                <td><?php echo "$fn";?></td>
                                                <td><?php echo "$gn";?></td>
                                                <td><?php echo "$nation";?></td>
                                                <td><?php echo "$job";?></td>
                                                <td><?php echo "$rank";?></td>
                                                <td><?php echo "$number";?></td>
                                                </tr>

                                        <?php
                                                }
                                        ?>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>Family name</th>
                                                <th>Given name</th>
                                                <th>Nationality</th>
                                                <th>Job role</th>
                                                <th>Rank or Rating</th>
                                                <th>Visa/Residence Permit Number</th>
                                                
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </div>
                        <div class="tab-pane" id="passengers"><hr><br>
                            <h4><b>Passengers Information...</b></h4>
                            <div class="row">
                            <div class="col-md-12">
                                <div class="card card-success">
                                    <h5 class="bg-gradient-lime" style="padding:5px; margin-top: 15px; margin-left:20px; border-radius:5px; font-weight: bold; width: 97%;">Passengers Information</h5>
                                    <div class="card-body">
                                    <hr>
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th>Family name</th>
                                                <th>Given name</th>
                                                <th>Nationality</th>
                                                <th>Date of birth</th>
                                                <th>V/R Permit Number</th>
                                                <th>Embarkation</th>
                                                <th>Disembarkation</th>
                                                <th>Transit</th>
                                               
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sel_pass = "SELECT * from passenger where notification_idnotification='$nid'";
                                                $run_pass = mysqli_query($con, $sel_pass);
                                                while ($row = mysqli_fetch_array($run_pass)) {                                             
                                                    $id = $row['idpassenger'];
                                                    $fn = $row['family_name'];
                                                    $gn = $row['given_name'];
                                                    $nation = $row['nationality'];
                                                    $number = $row['vr_permit_number'];
                                                    $embark = $row['embarkation'];
                                                    $disembark = $row['disembarkation'];
                                                    $bday = $row['date_of_birth'];
                                                    $transit = $row['transit'];
                                                
                                                ?>
                                            <tr>
                                                <td><?php echo "$fn";?></td>
                                                <td><?php echo "$gn";?></td>
                                                <td><?php echo "$nation";?></td>
                                                <td><?php echo "$bday";?></td>
                                                <td><?php echo "$number";?></td>
                                                <td><?php echo "$embark";?></td>
                                                <td><?php echo "$disembark";?></td>
                                                <td><?php echo "$transit";?></td>
                                             </tr>

                                        <?php
                                                }
                                        ?>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>Family name</th>
                                                <th>Given name</th>
                                                <th>Nationality</th>
                                                <th>Date of birth</th>
                                                <th>V/R Permit Number</th>
                                                <th>Embarkation</th>
                                                <th>Disembarkation</th>
                                                <th>Transit</th>
                                            
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </div>
                        <div class="tab-pane" id="health"><hr><br>
                            <h4><b>Health Information...</b></h4>
                            <div class="row">
                            <div class="col-md-12">
                                <div class="card card-success">
                                    <h5 class="bg-gradient-maroon" style="padding:5px; margin-top: 15px; margin-left:20px; border-radius:5px; font-weight: bold; width: 97%;">Health Information</h5>
                                    <div class="card-body">

                                    <div role="form">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Valid Sanitation Control Exemption</label>
                                                    <select class="form-control" name="shcong">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Issued at</label>
                                                    <input type="text" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Date of issue</label>
                                                    <input type="date" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Re-inspection required</label>
                                                    <input type="date" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Visited infected area</label>
                                                    <input type="date" class="form-control" >
                                                </div>
                                            </div>

                                            <h5 class="bg-gradient-maroon" style="padding:5px; margin-top: 15px; margin-left:5px; border-radius:5px; font-weight: bold; width: 100%;">Health Questions</h5>
                                            
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label >Disease on board</label>
                                                    <input type="date" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label >Infection condition on board</label>
                                                    <input type="date" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label >Medical consulted</label>
                                                    <input type="date" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label >Is there a sick animal or pet</label>
                                                    <input type="date" class="form-control" >
                                                </div>
                                            </div>

                                            

                                        </div>


                                        <div class="row">
                                        <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Any person died</label>
                                                    <input type="date" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label >Number of deaths</label>
                                                    <input type="number" class="form-control" name="mrn">
                                                </div>
                                            </div>
                                          
                                           </div>   <!-- row end -->

                                           <div class="row">
                                           <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label >Any ill person</label>
                                                    <input type="date" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label >Number of ill persons</label>
                                                    <input type="number" class="form-control" name="mrn">
                                                </div>
                                            </div>

                                           </div> <!-- row end -->

                                    </div>
                                    <h5 class="bg-gradient-maroon" style="padding:5px; margin-top: 15px; margin-left:5px; border-radius:5px; font-weight: bold; width: 100%;">Ill Persons</h5>
                                            
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
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sel_ss = "SELECT * from waste_disposal_info where waste_info_idwaste_info=' '";
                                                $run_ss = mysqli_query($con, $sel_ss);
                                                while ($row = mysqli_fetch_array($run_ss)) {                                             
                                                    $id = $row['idships_stores'];
                                                    $article = $row['name_of_article'];
                                                    $quantity = $row['quantity'];
                                                    $l_board = $row['location_on_board'];
                                                
                                                ?>
                                            <tr>
                                                <td><?php echo "$article";?></td>
                                                <td><?php echo "$quantity";?></td>
                                                <td><?php echo "$l_board";?></td>
                                                <td><a href="#" class="btn btn-dark">Delete</a></td>
                                            </tr>

                                        <?php
                                                }
                                        ?>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Crew or Passenger</th>
                                                <th>Family name</th>
                                                <th>Given name</th>
                                                <th>Sex</th>
                                                <th>Nature of illness</th>
                                                <th>Reported to port medical</th>
                                               
                                            </tr>
                                            </tfoot>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>

                        </div>
                    </div>

                    <br><br>
                    <?php
                    $state = "select * from notification where idnotification='$nid'";
                    $run_state = mysqli_query($con,$state);
                    $state_row = mysqli_fetch_array($run_state);
                    $status = $state_row['status'];
                    if ($status=='0') {
                    ?>
                    <form action="view_noti_details.php" method="post">               
                    <button type="submit" name="approve_noti_details" style="padding: 10px; font-size:20px;" class="btn bg-gradient-gray">Approved Notification Details</button>
                    </form>
                    <?php
                    }
                    ?>
                </center>
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
</body>
</html>

<?php
if (isset($_POST['approve_noti_details'])) {

    $update_n = "UPDATE notification set status='1' where idnotification='$nid'";
    $run_n = mysqli_query($con,$update_n);
    if ($run_n){
        echo "<script>
    			swal({
                    type: 'success',
                    title:'Approved Notification Details...',
                    showConfirmButton: true,
                    confirmButtonText: 'OK'
                })
                .then(willDelete => {
  				if (willDelete) {
    			window.open('view_notifications.php','_self')
  				}
				});
                </script>";
    }else {
        echo "Error: " . $update_n . "<br>" . $con->error;
    }


}

?>

