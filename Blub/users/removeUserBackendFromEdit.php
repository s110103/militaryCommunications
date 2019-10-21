<?php
/**
 * Created by PhpStorm.
 * User: lukas
 * Date: 08.10.19
 * Time: 14:25
 */

include '../../dbConnect.php';
include '../checkSession.php';

if(isset($_GET['id'])) {

    $sql = "DELETE * FROM `user` WHERE `id`='".$_GET['id']."'";

    $conn->query($sql);
    header("Location: editUser.php?id=".$_GET['id']);

} else {
    header("Location: editUser.php?id=".$_GET['id']);
}