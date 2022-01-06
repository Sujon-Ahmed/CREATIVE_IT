<?php
session_start();
require 'db.php';
// include header.php file form include/header.php
require_once 'include/header.php';
// get all input data form index form 
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
// pattern 
$pattern = '/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z])(?=.*[a-z]).{8,20}$/';
/* Here we are trying to validate the name field! */
$name_number = preg_match($pattern,$name);
/* Here we are trying to validate the password field */
$pass_upper = preg_match($pattern,$password);
$pass_lower = preg_match($pattern,$password);
$pass_special = preg_match($pattern,$password);
// password hash
$after_hash = password_hash($password, PASSWORD_BCRYPT);

// condition with validating all field
if(empty($name)) {
    $_SESSION['name_error'] = "Enter Your Name";
    header('location:register.php');
} elseif($name_number) {
    $_SESSION['name_error'] = "Please Enter Your Valid Name";
    header('location:register.php');
} elseif(empty($email)) {
    $_SESSION['email_error'] = "Enter Your Email";
    header('location:register.php');
} elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['email_error'] = "Please Enter Valid Email";
    header('location:register.php');
} elseif(empty($password)) {
    $_SESSION['password_error'] = "Enter Your Password";
    header('location:register.php');
} elseif(!$pass_upper || !$pass_lower || !$pass_special || strlen($password) < 8) {
    $_SESSION['password_error'] = "Password must contain at least one number, uppercase, lowercase letter, and at least 8 character or more";
    header('location:register.php');
} elseif(empty($confirm_password)) {
    $_SESSION['confirm_password_error'] = "Enter your Confirm Password";
    header('location:register.php');
} elseif($password != $confirm_password) {
    $_SESSION['confirm_password_error'] = "Confirm Password Doesn't Match";
    header('location:register.php');
} else {
    // insert data 
    $insert_data = "INSERT INTO `users`(`name`,`email`,`password`)VALUES('$name','$email','$after_hash')"; 
    $result = mysqli_query($con,$insert_data);
    $_SESSION['insert_success'] = "Registration Success!";
    header('location:register.php');
}
?>  
<?php require_once 'include/footer.php'; ?>