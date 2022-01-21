<?php
session_start();
require("../db.php");

if (!isset($_POST['submit'])) {
    header('location:profile.php');
} else {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $after_hash_password = password_hash($password, PASSWORD_BCRYPT);
    // check update felid
    if (empty($after_hash_password)) {
        $update = "UPDATE `users` SET `name`='$name' WHERE id=$id";
        $result = mysqli_query($con, $update);
        header('location:profile.php?id='.$id);        
    } else {
        $update = "UPDATE `users` SET `name`='$name', `password`='$after_hash_password' WHERE id=$id";
        $result = mysqli_query($con, $update);
        header('location:/Creative-IT/neon/admin.php');
    }
}


?>