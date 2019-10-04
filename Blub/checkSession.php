<?php

session_start();

if(isset($_SESSION['loggedIn'])) {
    if($_SESSION['loggedIn'] != true) {
        header("Location: ../index.php?alert=timeout");
    }
} else {
    header("Location: ../index.php?alert=timeout");
}