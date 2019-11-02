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
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../assets/vendor/select2/css/select2.css">
    <link rel="stylesheet" href="../assets/vendor/summernote/css/summernote-bs4.css">
    <link rel="stylesheet" href="../assets/vendor/datepicker/tempusdominus-bootstrap-4.css"/>
    <title>military Communications</title>
</head>

<?php
include "../checkSession.php";
include "../../dbConnect.php";

if (!isset($_GET['id'])) {
    header("Location: readLetters.php");
} else {
    $id = $_GET['id'];
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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-right-top">

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
                                    <?php

                                    if($_SESSION['permissions'] == 1) {
                                        echo "<li class='nav-item'>
                                        <a class='nav-link' href='../letters/inventLetter.php'>Verfassen</a>
                                    </li>
                                    <li class='nav-item'>
                                        <a class='nav-link' href='../letters/editLetters.php'>Bearbeiten</a>
                                    </li>
                                    <li class='nav-item'>
                                        <a class='nav-link' href='checkReactions.php'>Reaktionen</a>
                                    </li>";
                                    }

                                    ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="readLetters.php">Lesen</a>
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
                                        <a class='nav-link' href='../users/registerUser.php'>Anlegen</a>
                                    </li>
                                    <li class='nav-item'>
                                        <a class='nav-link' href='../users/editUser.php'>Bearbeiten</a>
                                    </li>
                                    <li class='nav-item'>
                                        <a class='nav-link' href='../users/approveUser.php'>Freigeben</a>
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
        <div class="container-fluid">
            <aside class="page-aside">
                <div class="aside-content">
                    <div class="aside-header">
                        <button class="navbar-toggle" data-target=".aside-nav" data-toggle="collapse" type="button">
                            <span class="icon"><i class="fas fa-caret-down"></i></span></button>
                        <span class="title">Brief Service</span>
                        <p class="description">Betrachte Liebe</p>
                    </div>
                    <div class="aside-nav collapse">
                    </div>
                </div>
            </aside>
            <div class="main-content container-fluid p-0">
                <div class="email-inbox-header">
                    <div class="row">
                        <div class="col-lg-6">

                            <?php

                            $sql = "SELECT * FROM `letters` WHERE `id`='" . $id . "'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();

                                echo "<div class='email-title'><span class='icon'><i class='fas fa-inbox'></i></span> Brief vom: " . $row['readableBy'] . " <span class='new-messages'></span></div>";
                            } else {
                                header("Location: readLetters.php");
                            }

                            ?>

                        </div>
                    </div>
                </div>
            </div>

            <div class="main-content container-fluid p-0">
                <div class="email-head">
                    <div class="email-head-title">
                        <?php
                        echo $row['title'];
                        ?>
                        <span class="icon mdi mdi-edit"></span></div>
                </div>

                <div class="email-compose-fields">
                    <?php
                    if (isset($_GET['alert'])) {
                        if ($_GET['alert'] == "error") {
                            echo "<div class='alert alert-danger' role='alert'>Fehler</div>";
                        }
                        if ($_GET['alert'] == "success") {
                            echo "<div class='alert alert-success' role='alert'>Gespeichert</div>";
                        }
                    }
                    ?>
                    <div class="email editor">
                        <div class="col-md-12 p-0">
                            <div class="form-group">
                                <?php
                                echo $row['rawText'];
                                ?>
                            </div>
                        </div>
                        <div class="email action-send">

                            <form method="post" action="saveReaction.php">

                                <div class="col-md-12 p-0">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="summernote">Reaktion </label>

                                        <?php

                                        if ($row['reaction'] != null) {
                                            $reaction = $row['reaction'];
                                            echo "<textarea class='form-control' id='summernote' name='reaction' rows='6' placeholder='Reaktion'>" . $reaction . "</textarea>";
                                        } else {
                                            echo "<textarea class='form-control' id='summernote' name='reaction' rows='6' placeholder='Reaktion'></textarea>";
                                        }

                                        ?>

                                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                                    </div>
                                </div>


                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-space" type="submit"><i
                                                    class="icon s7-mail"></i> Gelesen
                                        </button>

                                    </div>
                                </div>

                            </form>


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
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>

    <script src="../assets/vendor/select2/js/select2.min.js"></script>
    <script src="../assets/vendor/summernote/js/summernote-bs4.js"></script>
    <script src="../assets/vendor/datepicker/moment.js"></script>
    <script src="../assets/vendor/datepicker/tempusdominus-bootstrap-4.js"></script>
    <script src="../assets/vendor/datepicker/datepicker.js"></script>
    <script>
        $(document).ready(function () {

            // binding the check all box to onClick event
            $(".chk_all").click(function () {

                var checkAll = $(".chk_all").prop('checked');
                if (checkAll) {
                    $(".checkboxes").prop("checked", true);
                } else {
                    $(".checkboxes").prop("checked", false);
                }

            });

            // if all checkboxes are selected, then checked the main checkbox class and vise versa
            $(".checkboxes").click(function () {

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