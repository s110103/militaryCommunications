<?php
/**
 * Created by PhpStorm.
 * User: lukas
 * Date: 08.10.19
 * Time: 14:25
 */

include '../../dbConnect.php';

if(isset($_GET['id'])) {

    $sql = "DELETE * FROM `user` WHERE `id`='".$_GET['id']."'";

    $conn->query($sql);
    header("Location: approveUser.php");

} else {
    header("Location: approveUser.php");
}