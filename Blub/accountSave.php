<?php

include "checkSession.php";
include "../dbConnect.php";

$id = $_SESSION['id'];

$name = $_POST['name'];
$surname = $_POST['surname'];
$username = $_POST['username'];
$email = $_POST['email'];

$sql = "UPDATE `user` SET `name`='".$name."', `surname`='".$surname."', `username`='".$username."', `email`='".$email."' WHERE `id`='".$id."'";

if($conn->query($sql)) {

    $_SESSION['username'] = $username;
    $_SESSION['name'] = $name;
    $_SESSION['surname'] = $surname;
    $_SESSION['email'] = $email;

    header("Location: account.php?alert=success");
} else {
    header("Location: account.php?alert=error");
}