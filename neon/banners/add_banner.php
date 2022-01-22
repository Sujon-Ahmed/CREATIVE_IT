<?php 
session_start();
require '../db.php';
require '../dashboard_includes/header.php';
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="/Creative-IT/neon/admin.php">Neon</a>
        <a class="breadcrumb-item" href="#">Pages</a>
        <span class="breadcrumb-item active">Banner</span>
    </nav>
    <!-- page body section -->
    <div class="sl-pagebody">
        <div class="container">
            <div class="row">
                <div class="col-md-10 m-auto">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="text-center text-success">Add Banner Information</h5>
                        </div>
                        <div class="card-body">
                            <form action="banner_add_action.php" method="POST" enctype="multipart/form-data">
                                <!-- sub title felid -->
                                <label for="sub_title">Sub Title</label> <br>
                                <input type="text" name="sub_title" id="" class="form-control" placeholder="Enter your banner sub title">
                                <!-- title felid -->
                                <label for="title" class="mt-2">Title</label> <br>
                                <input type="text" name="title" id="" class="form-control" placeholder="Enter your banner title">
                                <!-- image felid -->
                                <label for="file" class="mt-2">Banner Image</label>
                                <input type="file" name="file" id="" class="form-control">
                                <!-- title felid -->
                                <label for="description" class="mt-2">Description</label> <br>
                                <textarea name="description" id="summernote" cols="30" rows="5" class="form-control"></textarea>
                                <!-- submit button -->
                                <div class="mt-3 d-grid gap-2 col-6 mx-auto py-2">
                                    <input type="submit" name="submit" class="btn btn-success btn-block" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ########## END: MAIN PANEL ########## -->

<?php require '../dashboard_includes/footer.php'?>





