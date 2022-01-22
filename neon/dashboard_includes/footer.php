   <script src="/Creative-IT/neon/dashboard_assets/lib/jquery/jquery.js"></script>
    <script src="/Creative-IT/neon/dashboard_assets/lib/popper.js/popper.js"></script>
    <script src="/Creative-IT/neon/dashboard_assets/lib/bootstrap/bootstrap.js"></script>
    <script src="/Creative-IT/neon/dashboard_assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <!-- dataTables -->
    <script src="/Creative-IT/neon/dashboard_assets/lib/datatables/jquery.dataTables.js"></script>
    <!-- summer note -->
    <script src="/Creative-IT/neon/dashboard_assets/lib/summernote/summernote.js"></script>
    <script src="/Creative-IT/neon/dashboard_assets/lib/summernote/summernote.min.js"></script>
    <script src="/Creative-IT/neon/dashboard_assets/lib/summernote/summernote-bs4.js"></script>
    <script src="/Creative-IT/neon/dashboard_assets/lib/summernote/summernote-bs4.min.js"></script>

    <script src="/Creative-IT/neon/dashboard_assets/js/starlight.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      $('#summernote').summernote({
      height: 150
      })
    </script>
    <!-- success message -->
    <?php if (isset($_SESSION['upload_success'])) {?>
        <script>
            Swal.fire({
            position: 'top-center',
            icon: 'success',
            title: '<?= $_SESSION['upload_success'] ?>',
            showConfirmButton: false,
            timer: 1500
            })
        </script>
    <?php } unset($_SESSION['upload_success']) ?>
  </body>
</html>