<?php

include "../../dbConnect.php";
include "../checkSession.php";

if($_SESSION['permissions'] != 1) {
    header("Location: ../index.php");
}

$username = $_POST['username'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordConfirm = $_POST['passwordConfirm'];
$rank = $_POST['rank'];

$passwordHash = hash("sha512", $password);
$passwordConfirmHash = hash("sha512", $passwordConfirm);

if($username != "" && $name != "" && $surname != "" && $email != "" && $password != "" && $passwordConfirm != "") {
    if($passwordHash == $passwordConfirmHash) {
        $sql = "INSERT INTO `user` (`username`, `password`, `name`, `surname`, `email`, `approved`, `permissions`, `notifications`) VALUES ('$username', '$passwordHash', '$name', '$surname', '$email', '1', '$rank', '0')";
        if($conn->query($sql)) {
            header("Location: registerUser.php?alert=success");
        } else {
            header("Location: registerUser.php?alert=error");
        }
    } else {
        header("Location: registerUser.php?alert=password");
    }
} else {
    header("Location: registerUser.php?alert=nodata");
}