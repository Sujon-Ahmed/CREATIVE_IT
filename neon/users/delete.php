<?php
session_start();
require '../db.php';
// check url get data
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    // select query for get image
    $select_image = "SELECT * FROM users WHERE id='$id'";
    $select_image_result = mysqli_query($con, $select_image);
    $after_assoc = mysqli_fetch_assoc($select_image_result);
    $delete_from ="../uploads/users/".$after_assoc['profile_image'];
    unlink($delete_from);
    // delete query
    $delete = "DELETE FROM `users` WHERE id = $id";
    $result = mysqli_query($con,$delete);
    $_SESSION['delete_success'] = "Delete Success";
    header('location:show.php');
}
?>