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
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

<body>
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->
<form class="splash-container" action="registerUser.php" method="post">
    <div class="card">
        <div class="card-header">
            <h3 class="mb-1">Military Communications</h3>
            <p>Registriere deinen Benutzer</p>
        </div>
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
            <div class="form-group pt-2">
                <button class="btn btn-block btn-primary" type="submit">Registrieren</button>
            </div>
        </div>
        <div class="card-footer bg-white">
            <p>Bereits registriert? <a href="index.php" class="text-secondary">Login.</a></p>
        </div>
    </div>
</form>
</body>


</html>