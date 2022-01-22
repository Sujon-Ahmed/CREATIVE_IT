<?php
session_start();
if(!isset($_SESSION['welcome'])) {
    header('location:/Creative-IT/neon/login/login.php');
}
require '../db.php';
$select_banners = "SELECT * FROM `banners`";
$banners = mysqli_query($con,$select_banners);
?>
<?php require '../dashboard_includes/header.php'; ?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="/Creative-IT/neon/admin.php">Neon</a>
    <a class="breadcrumb-item" href="/Creative-IT/neon/users/show.php">Users</a>
    <span class="breadcrumb-item active">View</span>
    </nav>
    <div class="sl-pagebody">
        <div class="container">
            <div class="row">
                <div class="col">
                    <table class="table table-striped table-hover caption-top" id="datatable1">
                        <thead class="bg-dark text-light">
                            <tr>
                                <th>ID</th>
                                <th>Sub-Title</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>                                            
                            <tbody>
                            <?php 
                                foreach($banners as $banner) {
                                    ?>
                                        <tr>
                                            <td><?= $banner['id'] ?></td>
                                            <td><?= $banner['banner_sub_title'] ?></td>
                                            <td><?= $banner['banner_title'] ?></td>
                                            <td>
                                                <img width="60" src="../uploads/banners/<?= $banner['banner_image'] ?>" alt="">
                                            </td>
                                            <td>
                                                <?php 
                                                    $description = $banner['banner_description'];
                                                    if (strlen($description) > 40) {
                                                        echo substr($description,0,40).'...';
                                                    } else {
                                                        echo $description;
                                                    }
                                                ?>
                                            </td>
                                            <td><?= date('M-d-Y h:i A',strtotime($banner['banner_created_at'])) ?></td>
                                            <td>
                                                <?php if ($banner['banner_status'] == 0) { ?>
                                                    <a href="status_change.php?id=<?= $banner['id'] ?>" class="btn btn-secondary btn-sm">Deactive</a>
                                                <?php } else { ?>
                                                    <a href="status_change.php?id=<?= $banner['id'] ?>" class="btn btn-info btn-sm">Active</a>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <!-- edit -->
                                                <a href="edit_banner.php?id=<?= $banner['id'] ?>" class="btn btn-success btn-sm">Edit</a>
                                                <!-- delete -->
                                                <a onclick="javascript:return confirm('Are You Sure?')" href="delete_banner.php?id=<?= $banner['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    <?php
                                }
                            ?>
                        </tbody>
                    </table>                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ########## END: MAIN PANEL ########## -->
<?php require '../dashboard_includes/footer.php'; ?>

<!-- script for dataTable -->
<script>
$('#datatable1').DataTable({
responsive: true,
language: {
  searchPlaceholder: 'Search...',
  sSearch: '',
  lengthMenu: '_MENU_ items/page',
}
});
</script>
<!-- delete success message -->
<?php if(isset($_SESSION['delete_success'])){ ?>
<script>
    Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
    )
</script>
<?php } unset($_SESSION['delete_success']) ?>
 