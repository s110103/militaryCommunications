<?php

include "dbConnect.php";

$username = $_POST['username'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordConfirm = $_POST['passwordConfirm'];

$passwordHash = hash("sha512", $password);
$passwordConfirmHash = hash("sha512", $passwordConfirm);

if($username != "" && $name != "" && $surname != "" && $email != "" && $password != "" && $passwordConfirm != "") {
    if($passwordHash == $passwordConfirmHash) {
        $sql = "INSERT INTO `user` (`username`, `password`, `name`, `surname`, `email`, `approved`, `permissions`, `notifications`) VALUES ('$username', '$passwordHash', '$name', '$surname', '$email', '0', '0', '0')";
        if($conn->query($sql)) {
            header("Location: sign-up.php?alert=success");
        } else {
            header("Location: sign-up.php?alert=error");
        }
    } else {
        header("Location: sign-up.php?alert=password");
    }
} else {
    header("Location: sign-up.php?alert=nodata");
}