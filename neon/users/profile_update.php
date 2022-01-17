<?php
session_start();
require("../db.php");

$id = $_POST['id'];
$name = $_POST['name'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

if (empty($password)) {
    $update = "UPDATE `users` SET `name`='$name' WHERE id=$id";
    $result = mysqli_query($con, $update);
    header('location:profile.php');
} else {
    $update = "UPDATE `users` SET `name`='$name', `password`='$password' WHERE id=$id";
    $result = mysqli_query($con, $update);
    header('location:profile.php');
}

?>