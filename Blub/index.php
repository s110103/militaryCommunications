<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>military Communications</title>
</head>

<?php
include "checkSession.php";
?>

<body>
<!-- ============================================================== -->
<!-- main wrapper -->
<!-- ============================================================== -->
<div class="dashboard-main-wrapper">
    <!-- ============================================================== -->
    <!-- navbar -->
    <!-- ============================================================== -->
    <div class="dashboard-header">
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <a class="navbar-brand" href="index.php">MCS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-right-top">

                    <li class="nav-item dropdown notification">
                        <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span
                                    class="indicator"></span></a>
                        <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                            <li>
                                <div class="notification-title"> Benachrichtigungen</div>
                                <div class="notification-list">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item list-group-item-action active">
                                            <div class="notification-info">
                                                <div class="notification-list-user-img"><img
                                                            src="assets/images/avatar-2.jpg" alt=""
                                                            class="user-avatar-md rounded-circle"></div>
                                                <div class="notification-list-user-block"><span
                                                            class="notification-list-user-name">Reaktion</span>Hallo,
                                                    der Brief war ur cool
                                                    <div class="notification-date">2 min ago</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="list-footer"><a href="#">Zeige alle Benachrichtigungen</a></div>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown nav-user">
                        <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt=""
                                                                           class="user-avatar-md rounded-circle"></a>
                        <div class="dropdown-menu dropdown-menu-right nav-user-dropdown"
                             aria-labelledby="navbarDropdownMenuLink2">
                            <div class="nav-user-info">
                                <h5 class="mb-0 text-white nav-user-name"><?php echo $_SESSION['name'] . " " . $_SESSION['surname'] ?> </h5>
                                <span class="status"></span><span class="ml-2">Online</span>
                            </div>
                            <a class="dropdown-item" href="account.php"><i class="fas fa-user mr-2"></i>Konto</a>

                            <a class="dropdown-item" href="logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- ============================================================== -->
    <!-- end navbar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- left sidebar -->
    <!-- ============================================================== -->
    <div class="nav-left-sidebar sidebar-dark">
        <div class="menu-list">

            <nav class="navbar navbar-expand-lg navbar-light">

                <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-divider">
                            Menü
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="index.php" aria-expanded="false"><i
                                        class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                        </li>

                        <li class="nav-divider">
                            Aktionen
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                               data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-fw fa-inbox"></i>Briefe</a>
                            <div id="submenu-1" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    
                                    <?php
                                    
                                    if($_SESSION['permissions'] == 1) {
                                        echo "<li class='nav-item'>
                                        <a class='nav-link' href='letters/inventLetter.php'>Verfassen</a>
                                    </li>
                                    <li class='nav-item'>
                                        <a class='nav-link' href='letters/editLetters.php'>Bearbeiten</a>
                                    </li>
                                    <li class='nav-item'>
                                        <a class='nav-link' href='pages/email-compose.html'>Reaktionen</a>
                                    </li>";
                                    }
                                    
                                    ?>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="letters/readLetters.php">Lesen</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                        <?php
                        if($_SESSION['permissions'] == 1) {
                            echo "<li class='nav-item'>
                            <a class='nav-link' href='#' data-toggle='collapse' aria-expanded='false'
                               data-target='#submenu-2' aria-controls='submenu-2'><i
                                        class='fas fa-users'></i>Benutzer</a>
                            <div id='submenu-2' class='collapse submenu' style=''>
                                <ul class='nav flex-column'>
                                    <li class='nav-item'>
                                        <a class='nav-link' href='users/registerUser.php'>Anlegen</a>
                                    </li>
                                    <li class='nav-item'>
                                        <a class='nav-link' href='users/editUser.php'>Bearbeiten</a>
                                    </li>
                                    <li class='nav-item'>
                                        <a class='nav-link' href='users/approveUser.php'>Freigeben</a>
                                    </li>
                                </ul>
                            </div>
                        </li>";
                        }
                        ?>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end left sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <!-- ============================================================== -->
                <!-- pageheader  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">military Communications Dashboard </h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active" aria-current="page"><a href="#"
                                                                                                  class="breadcrumb-link">military
                                                Communications Dashboard</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader  -->
                <!-- ============================================================== -->
                <div class="ecommerce-widget">

                    <div class="row">
                        
                        <?php
                        if($_SESSION['permissions'] == 1) {
                            echo "<div class='col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12'>
                            <div class='card'>
                                <div class='card-body'>
                                    <h3 class='card-title'>Spread love</h3>
                                    <p class='card-text'>Hier kannst du Liebe verbreiten</p>
                                    <a href='letters/inventLetter.php' class='btn btn-primary'>Briefe verfassen</a>
                                </div>
                            </div>
                        </div>
                        <div class='col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12'>
                            <div class='card'>
                                <div class='card-body'>
                                    <h3 class='card-title'>Edit love</h3>
                                    <p class='card-text'>Hier kannst du Liebe bearbeiten</p>
                                    <a href='letters/editLetters.php' class='btn btn-primary'>Briefe bearbeiten</a>
                                </div>
                            </div>
                        </div>
                        <div class='col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12'>
                            <div class='card'>
                                <div class='card-body'>
                                    <h3 class='card-title'>Check love</h3>
                                    <p class='card-text'>Hier kannst du Reaktionen und Lesestatistiken ansehen</p>
                                    <a href='letters/inventLetter.php' class='btn btn-primary'>Reaktionen</a>
                                </div>
                            </div>
                        </div>";
                        } else {
                            echo "<div class='col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12'>
                            <div class='card'>
                                <div class='card-body'>
                                    <h3 class='card-title'>Read Love</h3>
                                    <p class='card-text'>Hier kannst du Briefe lesen</p>
                                    <a href='letters/readLetters.php' class='btn btn-primary'>Lesen</a>
                                </div>
                            </div>
                        </div>";
                        }
                        
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        Copyright © 2019 s110103.
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- end main wrapper  -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<!-- jquery 3.3.1 -->
<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<!-- bootstap bundle js -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<!-- slimscroll js -->
<script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
<!-- main js -->
<script src="assets/libs/js/main-js.js"></script>
<!-- chart chartist js -->
<script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
<!-- sparkline js -->
<script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
<!-- morris js -->
<script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
<script src="assets/vendor/charts/morris-bundle/morris.js"></script>
<!-- chart c3 js -->
<script src="assets/vendor/charts/c3charts/c3.min.js"></script>
<script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
<script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
<script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>

</html>