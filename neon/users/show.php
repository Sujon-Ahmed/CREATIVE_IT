<?php
session_start();
// if(!isset($_SESSION['welcome'])) {
//     header('location:/Creative-IT/neon/login/login.php');
// }
require '../db.php';
$select_users = "SELECT * FROM `users`";
// query
$users = mysqli_query($con,$select_users);
?>
<?php require '../dashboard_includes/header.php'; ?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
<nav class="breadcrumb sl-breadcrumb">
<a class="breadcrumb-item" href="index.html">Neon</a>
<a class="breadcrumb-item" href="index.html">Users</a>
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
                    <th>Name</th>
                    <th>Email</th>
                    <th>Image</th>
                    <th>Create_at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($users as $user) {
                        ?>
                            <tr>
                                <td><?= $user['id'] ?></td>
                                <td><?= $user['name'] ?></td>
                                <td><?= $user['email'] ?></td>
                                <td>
                                    <img width="60" src="../uploads/users/<?= $user['profile_image'] ?>" alt="">
                                </td>
                                <td><?= $user['created_at'] ?></td>
                                <td>
                                    <a href="edit_user.php?id=<?= $user['id'] ?>" class="btn btn-success btn-sm">Edit</a>
                                    <a name="delete.php?id=<?= $user['id']?>" class="btn btn-danger btn-sm delete text-light">Delete</a>
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
</div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
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
<!-- script for delete button -->
<script>
$('.delete').click(function() {
    Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
    if (result.isConfirmed) {
        var link = $(this).attr('name');
        window.location.href = link;
    }
    })
})
</script>
<?php if(isset($_SESSION['delete_success'])){ ?>
<script>
    Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
    )
</script>
<?php } unset($_SESSION['delete_success']) ?>
 