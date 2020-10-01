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
                                To aprove ship list

                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="aproved.php" class="nav-link">
                            <i class="nav-icon fas fa-life-ring"></i>
                            <p>
                                aproved ship list

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
                        <h1 class="m-0 text-dark">View Ship Notification Details</h1>
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

                    $nid = $_SESSION["nid"];
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

                        </div>
                        <div class="tab-pane" id="stores"><hr><br>
                            <h4><b>Ship's Stores Information...</b></h4>

                        </div>
                        <div class="tab-pane" id="waste">
                            <h4><b>Waste Information...</b></h4>

                        </div>
                        <div class="tab-pane" id="security"><hr><br>
                            <h4><b>Security Information...</b></h4>

                        </div>
                        <div class="tab-pane" id="crew"><hr><br>
                            <h4><b>Crew Information...</b></h4>

                        </div>
                        <div class="tab-pane" id="passengers"><hr><br>
                            <h4><b>Passengers Information...</b></h4>

                        </div>
                        <div class="tab-pane" id="health"><hr><br>
                            <h4><b>Health Information...</b></h4>

                        </div>
                    </div>

                    <br><br>
                    <form action="view_noti_details.php" method="post">
                    <button type="submit" name="approve_noti_details" style="padding: 10px; font-size:20px;" class="btn bg-gradient-gray">Approved Notification Details</button>
                    </form>
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

