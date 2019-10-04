<?php

include "../../dbConnect.php";
include "../checkSession.php";

$title = $_POST['title'];
$readableBy = $_POST['readableByDate'];
$readableByTime = $_POST['readableByTime'];
$letter = $_POST['letter'];
$file = $_POST['file'];

$writtenBy = $_SESSION['id'];

if($title != "") {
    if($file != null) {
        $sql = "INSERT INTO `letters` (`title`, `readableBy`, `readableByTime`, `rawText`, `attachements`, `writtenBy`) VALUES ('$title', '$readableBy', '$readableByTime', '$letter', '$file', '$writtenBy')";
    } else {
        $sql = "INSERT INTO `letters` (`title`, `readableBy`, `readableByTime`, `rawText`, `writtenBy`) VALUES ('$title', '$readableBy', '$readableByTime', '$letter', '$writtenBy')";
    }

    if($conn->query($sql)) {
        header("Location: inventLetter.php?alert=success");
    } else {
        echo $sql;
        //header("Location: inventLetter.php?alert=error");
    }
} else {
    header("Location: inventLetter.php?alert=notitle");
}