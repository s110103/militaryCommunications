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
    <link rel="stylesheet" href="../assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <title>military Communications</title>
</head>

<?php
include "../checkSession.php";
include "../../dbConnect.php";
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

                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fas fa-users"></i>Benutzer</a>
                            <div id="submenu-2" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="../pages/inbox.html">Anlegen</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../pages/email-details.html">Bearbeiten</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../pages/email-details.html">Freigeben</a>
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
                        <button class="navbar-toggle" data-target=".aside-nav" data-toggle="collapse" type="button"><span class="icon"><i class="fas fa-caret-down"></i></span></button><span class="title">Brief Service</span>
                        <p class="description">Erschaffe Liebe</p>
                    </div>
                    <div class="aside-compose"><a class="btn btn-lg btn-secondary btn-block" href="#">Verfasse Brief</a></div>
                    <div class="aside-nav collapse">
                    </div>
                </div>
            </aside>
            <div class="main-content container-fluid p-0">
                <div class="email-inbox-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="email-title"><span class="icon"><i class="fas fa-inbox"></i></span> Briefe <span class="new-messages">

                                    <?php

                                    $sql = "SELECT * FROM `letters`";
                                    $result = $conn->query($sql);

                                    $i = 0;

                                    if($result->num_rows>0) {
                                        while ($row = $result->fetch_assoc()) {
                                            if($row['readByTarget'] != 1) {
                                                $i++;
                                            }
                                        }
                                    }

                                    echo $i." ungelesen";

                                    ?>

                                </span> </div>
                        </div>
                    </div>
                </div>
                <div class="email-list">

                    <?php

                    $sql = "SELECT * FROM `letters`";
                    $result = $conn->query($sql);

                    if($result->num_rows>0) {
                        while ($row = $result->fetch_assoc()) {
                            if($row['readByTarget'] != 1) {
                                echo "<div class='email-list-item email-list-item--unread'>";
                                echo "<div class='email-list-actions'>";
                                echo "<label class='custom-control custom-checkbox'><input class='custom-control-input checkboxes' type='checkbox' value='".$row['id']."' id='".$row['id']."'><span class='custom-control-label'></span></label>";
                                echo "</div>";
                                echo "<div class='email-list-detail'><span class='date float-right'><span class='icon'><i class='fas fa-paperclip'></i></span>".$row['readableBy']."</span><span class='from'>".$row['title']."</span>";
                                echo "<p class='msg'>".$row['rawText']."</p>";
                                echo "</div>";
                                echo "</div>";
                            } else {
                                echo "<div class='email-list-item'>";
                                echo "<div class='email-list-actions'>";
                                echo "<label class='custom-control custom-checkbox'><input class='custom-control-input checkboxes' type='checkbox' value='".$row['id']."' id='".$row['id']."'><span class='custom-control-label'></span></label>";
                                echo "</div>";
                                echo "<div class='email-list-detail'><span class='date float-right'><span class='icon'><i class='fas fa-paperclip'></i></span>".$row['readableBy']."</span><span class='from'>".$row['title']."</span>";
                                echo "<p class='msg'>".$row['rawText']."</p>";
                                echo "</div>";
                                echo "</div>";
                            }
                        }
                    }

                    ?>
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
</div>
<!-- ============================================================== -->
<!-- end main wrapper -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
<script src="../assets/libs/js/main-js.js"></script>
<script>
    $(document).ready(function() {

        // binding the check all box to onClick event
        $(".chk_all").click(function() {

            var checkAll = $(".chk_all").prop('checked');
            if (checkAll) {
                $(".checkboxes").prop("checked", true);
            } else {
                $(".checkboxes").prop("checked", false);
            }

        });

        // if all checkboxes are selected, then checked the main checkbox class and vise versa
        $(".checkboxes").click(function() {

            if ($(".checkboxes").length == $(".subscheked:checked").length) {
                $(".chk_all").attr("checked", "checked");
            } else {
                $(".chk_all").removeAttr("checked");
            }

        });

    });
</script>
</body>

</html>