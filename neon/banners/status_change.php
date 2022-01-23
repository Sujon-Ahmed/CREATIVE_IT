<?php
require '../db.php';
$id = $_GET['id'];
// select status mode
$select_status = "SELECT * FROM banners WHERE id=$id";
$select_status_result = mysqli_query($con, $select_status);
$after_assoc_status = mysqli_fetch_assoc($select_status_result);
// status condition
if ($after_assoc_status['banner_status'] == 1) {
    // update status 1 to 0
    $update_status = "UPDATE `banners` SET `banner_status`=0 WHERE id=$id";
    $update_status_result = mysqli_query($con, $update_status);
    header('location:view_banner.php');
} else {
    // all status set 0
    $update_status = "UPDATE `banners` SET `banner_status`=0";
    $update_status_result = mysqli_query($con, $update_status);
    header('location:view_banner.php');
    // update status 0 to 1
    $update_status = "UPDATE `banners` SET `banner_status`=1 WHERE id=$id";
    $update_status_result = mysqli_query($con, $update_status);
    header('location:view_banner.php');
}



?>