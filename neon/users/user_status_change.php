<?php
require '../db.php';
$id = $_GET['id'];
$select_status = "SELECT * FROM users WHERE id=$id";
$select_status_result = mysqli_query($con, $select_status);
$after_assoc = mysqli_fetch_assoc($select_status_result);

if($after_assoc['status'] == 0) {
    $update_status = "UPDATE users SET status=1 WHERE id=$id";
    $update_status_result = mysqli_query($con, $update_status);
    header('location:show.php');
} else {
    $update_status = "UPDATE users SET status=0 WHERE id=$id";
    $update_status_result = mysqli_query($con, $update_status);
    header('location:trashed_user.php');
}




?>