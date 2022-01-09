<?php
session_start();
require '../db.php';
// check url get data
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    // delete query
    $delete = "DELETE FROM `users` WHERE id = $id";
    $result = mysqli_query($con,$delete);
    $_SESSION['delete_success'] = "Delete Success";
    header('location:show.php');
}
?>