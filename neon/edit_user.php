<?php
session_start();
require 'db.php';
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $select_users = "SELECT * FROM users WHERE id=$id";
    $select_users_result = mysqli_query($con,$select_users);
    $after_assoc = mysqli_fetch_assoc($select_users_result);
}
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
                                <h5 class="title">Update User </h5>
                                <hr>
                                <form action="update.php" method="POST">
                                    <!-- name input felid -->
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                        <input type="text" name="name" value="<?= $after_assoc['name'] ?>" class="form-control" placeholder="Username">
                                    </div>
                                    <!-- email input felid -->
                                    <div class="input-group mt-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                        <input type="email" name="email" value="<?= $after_assoc['email'] ?>" class="form-control" placeholder="Email">
                                    </div>
                                    <!-- password input felid -->
                                    <div class="input-group mt-3 position-relative">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                                        <input type="password" name="password" id="pass" class="form-control" placeholder="Password">
                                        <i class="fa fa-eye position-absolute" id="click"></i>
                                    </div>
                                    <!-- button -->
                                    <div class="input-group mt-3">
                                        <input type="hidden" class="button" value="<?= $after_assoc['id'] ?>" name="id" >
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