<?php
/**
 * Created by PhpStorm.
 * User: lukas
 * Date: 09.10.19
 * Time: 13:59
 */

include "../../dbConnect.php";

$reaction = $_POST['reaction'];
$id = $_POST['id'];

$sql = "UPDATE `letters` SET `readByTarget`='1', `reaction`='$reaction' WHERE `id`='$id'";

if($conn->query($sql)) {
    header("Location: readDistinctLetter.php?alert=success");
} else {
    header("Location: readDistinctLetter.php?alert=error");
}