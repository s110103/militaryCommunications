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
    <link rel="stylesheet" href="../assets/vendor/select2/css/select2.css">
    <link rel="stylesheet" href="../assets/vendor/summernote/css/summernote-bs4.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendor/datepicker/tempusdominus-bootstrap-4.css"/>
    <title>military Communications</title>
</head>

<?php
include "../checkSession.php";
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
                                                            src="../assets/images/avatar-2.jpg" alt=""
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
                           aria-haspopup="true" aria-expanded="false"><img src="../assets/images/avatar-1.jpg" alt=""
                                                                           class="user-avatar-md rounded-circle"></a>
                        <div class="dropdown-menu dropdown-menu-right nav-user-dropdown"
                             aria-labelledby="navbarDropdownMenuLink2">
                            <div class="nav-user-info">
                                <h5 class="mb-0 text-white nav-user-name"><?php echo $_SESSION['name'] . " " . $_SESSION['surname'] ?> </h5>
                                <span class="status"></span><span class="ml-2">Online</span>
                            </div>
                            <a class="dropdown-item" href="../account.php"><i class="fas fa-user mr-2"></i>Konto</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Einstellungen</a>
                            <a class="dropdown-item" href="../logout.php"><i
                                        class="fas fa-power-off mr-2"></i>Logout</a>
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
                            <a class="nav-link" href="../index.php" aria-expanded="false"><i
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
                                    <li class="nav-item">
                                        <a class="nav-link" href="inventLetter.php">Verfassen</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="editLetters.php">Bearbeiten</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Reaktionen</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="readLetters.php">Lesen</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                                data-target="#submenu-2" aria-controls="submenu-2"><i
                                        class="fas fa-users"></i>Benutzer</a>
                            <div id="submenu-2" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item"><a class="nav-link" href="users/registerUser.php">Anlegen</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="users/editUser.php">Bearbeiten</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="users/approveUser.php">Freigeben</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

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
        <div class="container-fluid">
            <aside class="page-aside">
                <div class="aside-content">
                    <div class="aside-header">
                        <button class="navbar-toggle" data-target=".aside-nav" data-toggle="collapse" type="button">
                            <span class="icon"><i class="fas fa-caret-down"></i></span></button>
                        <span class="title">Brief Service</span>
                        <p class="description">Erschaffe Liebe</p>
                    </div>
                    <div class="aside-compose"><a class="btn btn-lg btn-secondary btn-block" href="#">Verfasse Brief</a>
                    </div>
                    <div class="aside-nav collapse">
                    </div>
                </div>
            </aside>
            <form name="inventLetter" action="inventLetterBackend.php" method="post">
                <div class="main-content container-fluid p-0">
                    <div class="email-head">
                        <div class="email-head-title">Verfasse einen neuen Brief<span class="icon mdi mdi-edit"></span>
                        </div>
                    </div>

                    <div class="email-compose-fields">
                        <?php
                        if (isset($_GET['alert'])) {
                            if ($_GET['alert'] == "error") {
                                echo "<div class='alert alert-danger' role='alert'>Fehler</div>";
                            }
                            if ($_GET['alert'] == "notitle") {
                                echo "<div class='alert alert-danger' role='alert'>Du musst einen Titel angeben</div>";
                            }
                            if ($_GET['alert'] == "success") {
                                echo "<div class='alert alert-success' role='alert'>Gespeichert</div>";
                            }
                        }
                        ?>

                        <div class="subject">
                            <div class="form-group row pt-2">
                                <label class="col-md-1 control-label">Titel</label>
                                <div class="col-md-11">
                                    <input class="form-control" type="text" name="title">
                                </div>
                            </div>
                        </div>
                        <div class="date">
                            <div class="form-group row pt-2">
                                <label class="col-md-1 control-label">Lesbar ab:</label>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input"
                                                   name="readableByDate" data-target="#datetimepicker4"/>
                                            <div class="input-group-append" data-target="#datetimepicker4"
                                                 data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <label class="col-md-1 control-label ">Uhrzeit:</label>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input"
                                                   name="readableByTime" data-target="#datetimepicker3"/>
                                            <div class="input-group-append" data-target="#datetimepicker3"
                                                 data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="email editor">
                        <div class="col-md-12 p-0">
                            <div class="form-group">
                                <label class="control-label sr-only" for="summernote">Descriptions </label>
                                <textarea class="form-control" id="summernote" name="letter" rows="6"
                                          placeholder="Write Descriptions"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 p-0">
                            <div class="form-group">
                                <input type="file" value="Auswählen" name="file" class="btn btn-primary">
                            </div>
                        </div>
                        <div class="email action-send">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <button class="btn btn-primary btn-space" type="submit"><i class="icon s7-mail"></i>
                                        Speichern
                                    </button>
                                    <a class="btn btn-secondary btn-space" href="inventLetter.php"><i
                                                class="icon s7-close"></i> Verwerfen</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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
</div>
<!-- ============================================================== -->
<!-- end main wrapper -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
<script src="../assets/vendor/select2/js/select2.min.js"></script>
<script src="../assets/vendor/summernote/js/summernote-bs4.js"></script>
<script src="../assets/libs/js/main-js.js"></script>
<script src="../assets/vendor/datepicker/moment.js"></script>
<script src="../assets/vendor/datepicker/tempusdominus-bootstrap-4.js"></script>
<script src="../assets/vendor/datepicker/datepicker.js"></script>
<script>
    $(document).ready(function () {
        $('.js-example-basic-multiple').select2({tags: true});
    });
</script>
<script>
    $(document).ready(function () {
        $('#summernote').summernote({
            height: 300

        });
    });
</script>
</body>

</html>