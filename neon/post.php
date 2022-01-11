<?php
session_start();
require 'db.php';

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
$pass_special = preg_match($pattern,$password);
// password hash
$after_hash = password_hash($password, PASSWORD_BCRYPT);
// created_at 
date_default_timezone_set('Asia/Dhaka');
$created = date('y-m-d h:i:s');

// old data 
$_SESSION['name'] = $name;
$_SESSION['email'] = $email;

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
} elseif(!$pass_special) {
    $_SESSION['password_error'] = "Password must contain at least one number, uppercase, lowercase letter, and at least 8 character or more";
    header('location:register.php');
} elseif(empty($confirm_password)) {
    $_SESSION['confirm_password_error'] = "Enter your Confirm Password";
    header('location:register.php');
} elseif($password != $confirm_password) {
    $_SESSION['confirm_password_error'] = "Confirm Password Doesn't Match";
    header('location:register.php');
} else {
    // check email exist
    $select_email = "SELECT COUNT(*) as email_exist FROM `users` WHERE email='$email'";
    $result = mysqli_query($con,$select_email);
    $after_assoc = mysqli_fetch_assoc($result);
    // check condition
    if($after_assoc['email_exist'] == 1) {
       $_SESSION['email_exist'] = "This Email Already Exist!";
       header('location:register.php');
    } else {
        // image uploads
        $uploaded_file = $_FILES['profile_image'];
        $after_explode = explode('.',$uploaded_file['name']);
        $extension = end($after_explode);
        $allowed_extension = array('jpg','png','jpeg');
        // check in array function
        if(in_array($extension, $allowed_extension)) {
            // check image size
            if($uploaded_file['size'] <= 2000000) {
                // insert data without image for get id
                $insert_data = "INSERT INTO `users`(`name`,`email`,`password`,`created_at`)VALUES('$name','$email','$after_hash','$created')"; 
                $result = mysqli_query($con,$insert_data);
                // get id with mysqli_insert_id()
                $last_id = mysqli_insert_id($con);
                $file_name = $last_id.'.'.$extension;
                $new_location = 'uploads/users/'.$file_name;
                move_uploaded_file($uploaded_file['tmp_name'],$new_location);
                // update image file
                $update = "UPDATE users SET `profile_image`='$file_name' WHERE id = '$last_id'";
                $update_result = mysqli_query($con, $update);
                // session start
                $_SESSION['user_success'] = "Registration Success!";
                // unset session data
                unset($_SESSION['name']);
                unset($_SESSION['email']);
                header('location:register.php');
            } else {
                $_SESSION['size_error'] = 'The file is too large. Allowed maximum size is 2 MiB.';
                header('location:register.php');
            }
        } else {
            $_SESSION['extension_error'] = 'Invalid Extension!';
            header('location:register.php');
        }
        
    }    
}
?>  
