<?php

session_start();
unset($_SESSION['loggedIn']);
unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['email']);
unset($_SESSION['name']);
unset($_SESSION['surname']);
unset($_SESSION['approved']);
unset($_SESSION['permissions']);
unset($_SESSION['notifications']);
session_destroy();

header("Location: ../index.php?alert=logout");