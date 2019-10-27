<?php

include "checkSession.php";
include "../dbConnect.php";

$id = $_SESSION['id'];
$oldPassword = $_POST['oldPassword'];
$newPassword = $_POST['newPassword'];
$newPasswordRepeat = $_POST['newPasswordRepeat'];
$currentPassword = "";

$resultPassword = $conn->query("SELECT * FROM `user` WHERE `id`='".$id."'");

if($resultPassword->num_rows>0) {
    while ($row = $resultPassword->fetch_assoc()) {
        $currentPassword = $row['password'];
    }
} else {
    header("account.php?alert=error");
}

if(hash("sha512", $oldPassword) == $currentPassword) {
    if($newPassword == $newPasswordRepeat) {
        $newPasswordHash = hash("sha512", $newPassword);

        $sql = "UPDATE `user` SET `password`='".$newPasswordHash."'";

        if($conn->query($sql)) {
            header("Location: account.php?alert=success");
        } else {
            header("Location: account.php?alert=error");
        }
    } else {
        header("Location: account.php?alert=nomatch");
    }
} else {
    header("Location: account.php?alert=wrongpass");
}