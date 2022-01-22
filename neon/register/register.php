<?php
session_start();
if(!isset($_SESSION['welcome'])) {
    header('location:/Creative-IT/neon/login/login.php');
}
require '../include/header.php';
?>
<?php require '../dashboard_includes/header.php' ?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
<nav class="breadcrumb sl-breadcrumb">
<a class="breadcrumb-item" href="/Creative-IT/neon/admin.php">Neon</a>
<a class="breadcrumb-item" href="/Creative-IT/neon/users/show.php">Users</a>
<span class="breadcrumb-item active">Register</span>
</nav>

<div class="sl-pagebody">
<div class="row m-auto">
    <div class="col-lg-6">
        <div class="card mb-3 shadow">
            <div class="row g-0">
                <div class="col-md-4 col-sm-12">
                <img src="../img/bg.jpg" class="img-fluid rounded-start images" alt="...">
                </div>
                <div class="col-md-8 col-sm-12">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h5 class="title">Register </h5>
                            <!-- show insert data success message -->
                            <div>
                                
                                <!-- show email exist warning message -->
                                <span>
                                    <?php if(isset($_SESSION['email_exist'])) {
                                        ?>
                                            <span style="color: red;font-weight:bold;"><?php echo $_SESSION['email_exist']; ?></span>
                                        <?php
                                    }unset($_SESSION['email_exist']); ?>
                                </span>
                            </div>
                        </div>
                        <hr>
                        <form action="post.php" method="POST" enctype="multipart/form-data">
                            <!-- name input felid -->
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                <input type="text" name="name" class="form-control" placeholder="Username">
                            </div>
                            <!-- name error message -->
                            <?php 
                                if(isset($_SESSION['name_error'])) {
                                    ?>
                                        <span style="color:tomato;"><?php echo $_SESSION['name_error']; ?></span>
                                    <?php
                                }unset($_SESSION['name_error']);
                            ?>
                            <!-- email input felid -->
                            <div class="input-group mt-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                <input type="text" name="email" class="form-control" placeholder="Email">
                            </div>
                            <!-- email error message -->
                            <?php 
                                if(isset($_SESSION['email_error'])) {
                                    ?>
                                        <span style="color:tomato;"><?php echo $_SESSION['email_error']; ?></span>
                                    <?php
                                }unset($_SESSION['email_error']);
                            ?>
                            <!-- password input felid -->
                            <div class="input-group mt-3 position-relative">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                                <input type="password" name="password" id="pass" class="form-control" placeholder="Password">
                                <i class="fa fa-eye position-absolute" id="click"></i>
                            </div>
                            <!-- password error message -->
                            <?php
                                if(isset($_SESSION['password_error'])) {
                                    ?>
                                        <span style="color: tomato;"><?php echo $_SESSION['password_error']; ?></span>
                                    <?php
                                }unset($_SESSION['password_error']);
                            ?>
                            <!-- confirm password input felid -->
                            <div class="input-group mt-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                                <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">
                            </div>
                            <!-- confirm password error message -->
                            <?php
                                if(isset($_SESSION['confirm_password_error'])) {
                                    ?>
                                        <span style="color: tomato;"><?php echo $_SESSION['confirm_password_error']; ?></span>
                                    <?php
                                }unset($_SESSION['confirm_password_error']);
                            ?>
                            <!-- image input felid -->
                            <div class="input-group mt-3">
                                <input type="file" name="profile_image" class="form-control">
                            </div>
                            <!-- submit -->
                            <div class="input-group mt-3">
                                <input type="submit" class="button" value="Login" name="submit" >
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->
<?php require '../include/footer.php' ?>
<?php require '../dashboard_includes/footer.php' ?>
