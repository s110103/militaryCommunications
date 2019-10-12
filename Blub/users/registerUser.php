<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <title>military Communications</title>
</head>

<?php
include "../checkSession.php";

if($_SESSION['permissions'] != 1) {
    header("Location: ../index.php");
}
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
            <a class="navbar-brand" href="../index.php">MCS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-right-top">

                    <li class="nav-item dropdown notification">
                        <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                        <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                            <li>
                                <div class="notification-title"> Benachrichtigungen</div>
                                <div class="notification-list">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item list-group-item-action active">
                                            <div class="notification-info">
                                                <div class="notification-list-user-img"><img src="../assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                <div class="notification-list-user-block"><span class="notification-list-user-name">Reaktion</span>Hallo, der Brief war ur cool
                                                    <div class="notification-date">2 min ago</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="list-footer"> <a href="#">Zeige alle Benachrichtigungen</a></div>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown nav-user">
                        <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                        <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                            <div class="nav-user-info">
                                <h5 class="mb-0 text-white nav-user-name"><?php echo $_SESSION['name']." ".$_SESSION['surname']?> </h5>
                                <span class="status"></span><span class="ml-2">Online</span>
                            </div>
                            <a class="dropdown-item" href="../account.php"><i class="fas fa-user mr-2"></i>Konto</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Einstellungen</a>
                            <a class="dropdown-item" href="../logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
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
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-divider">
                            Menü
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="../index.php" aria-expanded="false"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                        </li>

                        <li class="nav-divider">
                            Aktionen
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-fw fa-inbox"></i>Briefe</a>
                            <div id="submenu-1" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <?php

                                    if($_SESSION['permissions'] == 1) {
                                        echo "<li class='nav-item'>
                                        <a class='nav-link' href='../letters/inventLetter.php'>Verfassen</a>
                                    </li>
                                    <li class='nav-item'>
                                        <a class='nav-link' href='../letters/editLetters.php'>Bearbeiten</a>
                                    </li>
                                    <li class='nav-item'>
                                        <a class='nav-link' href='#'>Reaktionen</a>
                                    </li>";
                                    }

                                    ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Lesen</a>
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
                                        <a class='nav-link' href='registerUser.php'>Anlegen</a>
                                    </li>
                                    <li class='nav-item'>
                                        <a class='nav-link' href='editUser.php'>Bearbeiten</a>
                                    </li>
                                    <li class='nav-item'>
                                        <a class='nav-link' href='approveUser.php'>Freigeben</a>
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
        <div class="container-fluid dashboard-content">
            <!-- ============================================================== -->
            <!-- pageheader -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Registriere einen neuen Benutzer </h2>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader -->
            <!-- ============================================================== -->


            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <form method="post" action="registerUserBackend.php">
                        <?php
                        if(isset($_GET['alert'])) {
                            if($_GET['alert'] == "error") {
                                echo "<div class='alert alert-danger' role='alert'>Fehler</div>";
                            }
                            if($_GET['alert'] == "password") {
                                echo "<div class='alert alert-danger' role='alert'>Passwörter stimmen nicht überein</div>";
                            }
                            if($_GET['alert'] == "nodata") {
                                echo "<div class='alert alert-danger' role='alert'>Nicht alle Felder ausgefüllt</div>";
                            }
                            if($_GET['alert'] == "success") {
                                echo "<div class='alert alert-success' role='alert'>Registrierung abgeschlossen</div>";
                            }
                        }
                        ?>
                        <div class="card-body">
                            <div class="form-group">
                                <input class="form-control form-control-lg" type="text" name="username" required="" placeholder="Benutzername" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-lg" type="text" name="name" required="" placeholder="Vorname" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-lg" type="text" name="surname" required="" placeholder="Nachname" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="E-mail" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-lg" id="pass1" name="password" type="password" required="" placeholder="Passwort">
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-lg" required="" type="password" name="passwordConfirm" placeholder="Bestätigen">
                            </div>
                            <div class="form-group">
                                <select class="custom-select d-block w-100" name="rank">
                                    <option value="0">Leser</option>
                                    <option value="1">Administrator</option>
                                </select>
                            </div>
                            <div class="form-group pt-2">
                                <button class="btn btn-block btn-primary" type="submit">Registrieren</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
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
    <!-- end main wrapper -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- end main wrapper -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
<script src="../assets/libs/js/main-js.js"></script>
</body>

</html>