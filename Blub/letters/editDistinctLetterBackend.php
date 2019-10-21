<?php

include "../checkSession.php";
include "../../dbConnect.php";

if ($_SESSION['permissions'] != 1) {
    header("Location: ../index.php");
}

$id = $_POST['id'];
$title = $_POST['title'];
$readableBy = $_POST['readableByDate'];
$readableByTime = $_POST['readableByTime'];
$rawText = $_POST['letter'];
$attachements = $_POST['file'];

$sql = "UPDATE `letters` SET `title`='".$title."', `readableBy`='".$readableBy."', `readableByTime`='".$readableByTime."', `rawText`='".$rawText."', `attachements`='".$attachements."' WHERE `id`='".$id."'";

if($conn->query($sql)) {
    header("Location: editLetters.php");
} else {
    header("Location: editLetters.php");
}