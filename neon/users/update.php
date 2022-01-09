<?php
session_start();
require '../db.php';
if(!isset($_POST['id'])) {
    header('location:show.php');
} else {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $after_hash = password_hash($password, PASSWORD_BCRYPT);
}
// check empty password
if(empty($name)) {
    $_SESSION['name_error'] = "This felid are required!";
    header('location:edit_user.php');

} elseif(empty($email)) {
    $_SESSION['email_error'] = "This felid are required!";
    header('location:edit_user.php');
} elseif(empty($password)) {
    $update_user = "UPDATE users SET name='$name', email='$email' WHERE id='$id'";
    $update_user_result = mysqli_query($con, $update_user);
    header('location:show.php');
} else {
    if (strlen($password) < 8) {
        $_SESSION['password_error'] = "At least 8 characters";
        header('location:edit_user.php');
    } else {
        $update_user = "UPDATE users SET name='$name', email='$email', password='$after_hash' WHERE id='$id'";
        $update_user_result = mysqli_query($con, $update_user);
        header('location:show.php');
    }
}


?>