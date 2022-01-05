<?php
session_start();
// include header.php file form include/header.php
require_once 'include/header.php';
// get all input data form index form 
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
/* Here we are trying to validate the name field! */
$name_number = preg_match('@[0-9]@',$name);
/* Here we are trying to validate the password field */
$pass_upper = preg_match('@[A-Z]@',$password);
$pass_lower = preg_match('@[a-z]@',$password);
$pass_special = preg_match('@[#,$,%,^,&,*]@',$password);
// condition with validating all field
if(empty($name)) {
    $_SESSION['name_error'] = "Enter Your Name";
    header('location:index.php');
} elseif($name_number) {
    $_SESSION['name_error'] = "Please Enter Your Valid Name";
    header('location:index.php');
} elseif(empty($email)) {
    $_SESSION['email_error'] = "Enter Your Email";
    header('location:index.php');
} elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['email_error'] = "Please Enter Valid Email";
    header('location:index.php');
} elseif(empty($password)) {
    $_SESSION['password_error'] = "Enter Your Password";
    header('location:index.php');
} elseif(!$pass_upper || !$pass_lower || !$pass_special || strlen($password) < 8) {
    $_SESSION['password_error'] = "Password must contain at least one number, uppercase, lowercase letter, and at least 8 character or more";
    header('location:index.php');
} elseif(empty($confirm_password)) {
    $_SESSION['confirm_password_error'] = "Enter your Confirm Password";
    header('location:index.php');
} elseif($password != $confirm_password) {
    $_SESSION['confirm_password_error'] = "Confirm Password Doesn't Match";
    header('location:index.php');
} else {
    ?>
    <!-- showing all input data here -->
    <div class="container">
        <div class="row position-relative">
            <div class="col-md-6 col-sm-12 col position-absolute">
                <h5>User Information</h5>
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true"><i class="fa fa-user"></i> <?php echo $name; ?> </li>
                    <li class="list-group-item"><i class="fa fa-envelope"></i> <?php echo $email; ?></li>
                    <li class="list-group-item"><i class="fa fa-lock"></i> <?php echo $password; ?></li>
                    <li class="list-group-item"><i class="fa fa-lock"></i> <?php echo $confirm_password; ?></li>
                    <li class="list-group-item"><a href="index.php"><i class="fa fa-sign-out"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    <?php
}
?>  
<?php require_once 'include/footer.php'; ?>