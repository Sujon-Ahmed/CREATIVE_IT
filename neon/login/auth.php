<?php
session_start();
require '../db.php';
$email = $_POST['email'];
$password = $_POST['password'];

$select_email = "SELECT COUNT(*) as email_retrive, name, profile_image, id FROM users WHERE email='$email'";
$select_email_result = mysqli_query($con,$select_email);
$after_assoc = mysqli_fetch_assoc($select_email_result);

if($after_assoc['email_retrive'] == 1) {
    $select_email2 = "SELECT * FROM users WHERE email='$email'";
    $select_email_result2 = mysqli_query($con,$select_email2);
    $after_assoc2 = mysqli_fetch_assoc($select_email_result2);
    if(password_verify($password, $after_assoc2['password'])) {
        $_SESSION['welcome'] = "Welcome";
        $id = $_SESSION['id'] = $after_assoc['id'];
        $name = $_SESSION['name'] = $after_assoc['name'];
        $img = $_SESSION['profile_image'] = $after_assoc['profile_image'];
        header('location:../admin.php');
    } else {
        header('location:login.php');
       $_SESSION['pass_error'] = "Invalid Password!";
    }
} else {
    header('location:login.php');
    $_SESSION['email_error'] = "Invalid Email!";
}


?>