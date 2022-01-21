<?php
session_start();
require("../dashboard_includes/header.php");

?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Neon</a>
        <a class="breadcrumb-item" href="index.html">Users</a>
        <span class="breadcrumb-item active">Edit</span>
    </nav>
    <div class="sl-pagebody">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto">
                    <div class="card shadow-sm">
                        <div class="card-header bg-info">
                            <h4 class="text-center text-light">Edit User</h4>
                        </div>
                        <div class="card-body">
                            <form action="profile_update.php" method="POST">
                                <!-- input name felid -->
                                <div class="mt-2">
                                    <label for="name">Name</label>
                                    <input type="hidden" name="id" value="<?= $_SESSION['id'] ?>" class="form-control">
                                    <input type="text" name="name" value="<?= $_SESSION['name'] ?>" id="name" placeholder="Enter Your Name" class="form-control">
                                </div>
                                <!-- input password felid -->
                                <div class="mt-2">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" placeholder="Enter Your Password" class="form-control">
                                </div>
                                <!-- submit button -->
                                <div class="mt-3">
                                    <input type="submit" name="submit" class="btn btn-info btn-sm" value="Update">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

<?php require("../dashboard_includes/footer.php"); ?>