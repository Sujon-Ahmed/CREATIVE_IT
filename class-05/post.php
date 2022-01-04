<?php
session_start();
// variables deciare
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
// password validate
$upper = preg_match('@[A-Z]@',$password);
$lower = preg_match('@[a-z]@',$password);
$number = preg_match('@[0-9]@',$password);
$number = preg_match('@[0-9]@',$password);
$special = preg_match('@[#,$,%,^,&,*]@',$password);

$confirm_password = $_POST['confirm_password'];


if (empty($name)) {
    $_SESSION['name_err'] = "Please Enter Your Name";
    header('location:index.php');
} elseif (empty($email)) {
    $_SESSION['email_err'] = "Please Enter Your Email;";
    header('location:index.php');
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['email_err'] = "Please Enter Valid Email;";
    header('location:index.php');
} elseif (empty($password)) {
    $_SESSION['pass_err'] = "Please Enter Your Password";
    header('location:index.php');

} elseif (!$upper || !$lower || !$number || !$special || strlen($password) < 8) {
    $_SESSION['pass_err'] = "Password Must Have an Uppercase! 1 Lowercase 1 Number 1 Special Character and must be at least 8 characters";
    header('location:index.php');

} elseif (empty($confirm_password)) {
    $_SESSION['con_pass_err'] = "Enter Your Confirm Password";
    header('location:index.php');
} elseif ($password != $confirm_password) {
    $_SESSION['con_pass_err'] = "Password Doesn't Match";
    header('location:index.php');
} else { 
    echo $name;
    echo '<br>';
    echo $email;
    echo '<br>';
    echo $password;
}

?>