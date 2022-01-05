<?php
session_start();
require_once 'include/header.php';
?>
<section>
    <div class="container">
        <div class="row m-auto">
            <div class="col-lg-6 m-auto mt-5">
                <div class="card mb-3 shadow">
                    <div class="row g-0">
                        <div class="col-md-4 col-sm-12">
                        <img src="img/bg.jpg" class="img-fluid rounded-start images" alt="...">
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <div class="card-body">
                                <h5 class="title">Login Here</h5>
                                <hr>
                                <form action="post.php" method="POST">
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
                                    <div class="input-group mt-2">
                                        <input type="submit" class="button" value="Login" name="submit" >
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require_once 'include/footer.php' ?>