<?php
session_start();
require 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$after_hash = password_hash($password, PASSWORD_BCRYPT);

if(empty($password)) {
    $update_user = "UPDATE users SET name='$name', email='$email' WHERE id='$id'";
    $update_user_result = mysqli_query($con, $update_user);
    header('location:show.php');
} else {
    $update_user = "UPDATE users SET name='$name', email='$email', password='$after_hash' WHERE id='$id'";
    $update_user_result = mysqli_query($con, $update_user);
    header('location:show.php');
}

?>