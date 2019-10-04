<?php

include "dbConnect.php";

$username = $_POST['username'];
$password = $_POST['password'];

$passwordHash = hash("sha512", $password);

$sql = "SELECT * FROM `user` WHERE `username`='".$username."'";
$result = $conn->query($sql);

if($result->num_rows>0) {
    while ($row = $result->fetch_assoc()) {
        if($row['password'] == $passwordHash) {
            if($row['approved'] == 1) {
                session_start();
                $_SESSION['loggedIn'] = true;
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $username;
                $_SESSION['name'] = $row['name'];
                $_SESSION['surname'] = $row['surname'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['approved'] = $row['approved'];
                $_SESSION['permissions'] = $row['permissions'];
                $_SESSION['notifications'] = $row['notifications'];

                header("Location: Blub/index.php");
            } else {
                header("Location: index.php?alert=approve");
            }
        } else {
            header("Location: index.php?alert=error");
        }
    }
} else {
    header("Location: index.php?alert=error");
}