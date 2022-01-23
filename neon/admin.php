<?php 
session_start();
if(!isset($_SESSION['welcome'])) {
    header('location:/Creative-IT/neon/login/login.php');
}
require 'dashboard_includes/header.php';
?>
<!-- ########## START: MAIN PANEL ########## -->
<!-- main panel -->
<div class="sl-mainpanel">
    <!-- breadcrumb -->
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="admin.php">Neon</a>
        <span class="breadcrumb-item active">Home</span>
    </nav>
<!-- page body -->
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <!-- first row card start here -->
            <div class="row row-sm">
                <!-- col-xl3 -->
                <div class="col-sm-6 col-xl-3">
                    <!-- card -->
                    <div class="card pd-20 pd-sm-25">
                        <div class="d-flex align-items-center">
                            <div class="mg-l-15">
                                <p class="tx-uppercase tx-11 tx-spacing-1 tx-medium tx-gray-600 mg-b-8">Daily Sales</p>
                                <h3 class="tx-bold tx-lato tx-inverse mg-b-0">$45,302</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col-xl-3 -->
                <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
                    <!-- card -->
                    <div class="card pd-20 pd-sm-25 bg-primary">
                        <div class="d-flex align-items-center">
                            <div class="mg-l-15">
                                <p class="tx-uppercase tx-11 tx-spacing-1 tx-medium tx-white-5 mg-b-8">Daily Sales</p>
                                <h3 class="tx-bold tx-lato tx-white mg-b-0">$45,302</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col-xl-3 -->
                <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                    <!-- card -->
                    <div class="card pd-20 pd-sm-25 bg-info">
                        <div class="d-flex align-items-center">
                            <div class="mg-l-15">
                                <p class="tx-uppercase tx-11 tx-spacing-1 tx-medium tx-white-5 mg-b-8">Daily Sales</p>
                                <h3 class="tx-bold tx-lato tx-white mg-b-0">$45,302</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col-xl-3 -->
                <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                    <div class="card pd-20 pd-sm-25 bg-sl-primary">
                        <div class="d-flex align-items-center">
                            <div class="mg-l-15">
                                <p class="tx-uppercase tx-11 tx-spacing-1 tx-medium tx-white-5 mg-b-8">Daily Sales</p>
                                <h3 class="tx-bold tx-lato tx-white mg-b-0">$45,302</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- first row card end here -->
        </div>
    </div>
</div>
<!-- ########## END: MAIN PANEL ########## -->
<?php require '../neon/dashboard_includes/footer.php'; ?>

