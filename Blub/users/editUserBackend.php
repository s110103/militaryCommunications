<?php

include '../../dbConnect.php';
include '../checkSession.php';

$id = $_POST['id'];
$username = $_POST['username'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$permissions = $_POST['permissions'];

$sql = "UPDATE `user` SET `username`='".$username."', `name`='".$name."', `surname`='".$surname."', `email`='".$email."', `permissions`='".$permissions."' WHERE `id`='".$id."'";

if($conn->query($sql)) {
    header("Location: editUser.php?alert=success");
} else {
    header("Location: editUser.php?alert=error");
}