<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>military Communications</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Blub/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="Blub/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="Blub/assets/libs/css/style.css">
    <link rel="stylesheet" href="Blub/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="Blub/index.php"><h1 class="aside-header">Military Communications</h1></a><span class="splash-description">Login to spread love!</span></div>

            <!--<div class="card-header text-center"><a href="Blub/index.php"><img class="logo-img" src="Blub/assets/images/logo.png" alt="logo"></a><span class="splash-description">Login</span></div>-->
            <div class="card-body">
                <form name="login" method="post" action="login.php">

                    <?php
                    if(isset($_GET['alert'])) {
                        if($_GET['alert'] == "error") {
                            echo "<div class='alert alert-danger' role='alert'>Falsche Daten</div>";
                        }
                        if($_GET['alert'] == "approve") {
                            echo "<div class='alert alert-warning' role='alert'>Nicht freigegeben</div>";
                        }
                        if($_GET['alert'] == "timeout") {
                            echo "<div class='alert alert-secondary' role='alert'>Sitzung abgelaufen</div>";
                        }
                        if($_GET['alert'] == "logout") {
                            echo "<div class='alert alert-success' role='alert'>Abgemeldet</div>";
                        }
                    }
                    ?>

                    <div class="form-group">
                        <input class="form-control form-control-lg" id="username" name="username" type="text" placeholder="Username" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" name="password" type="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div>
                    <!--<button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>-->
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Sign in">
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="sign-up.php" class="footer-link">Registrieren</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Passwort vergessen</a>
                </div>
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="Blub/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="Blub/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>