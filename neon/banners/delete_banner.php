<?php
session_start();
require '../db.php';
// get id
if (isset($_GET['banner_id'])) {
    $id = $_GET['banner_id'];
    // select query for get image
    $select_image = "SELECT * FROM `banners` WHERE `banner_id` = $id";
    $select_image_result = mysqli_query($con, $select_image);
    $after_assoc = mysqli_fetch_assoc($select_image_result);
    $delete_form = "../uploads/banners/".$after_assoc['banner_image'];
    unlink($delete_form);
    // delete query
    $delete = "DELETE FROM `banners` WHERE `banner_id` = $id";
    $delete_result = mysqli_query($con, $delete);
    $_SESSION['delete_success'] = "Banner Delete Successfully";
    header('location:view_banner.php'); 
}
?>