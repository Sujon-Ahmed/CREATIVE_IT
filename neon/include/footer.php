<!-- jquery cdn link -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- sweet alert cdn link -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   

   <script>
       // script for eye show and hide
        $('#click').click(function(){
            var input_pass = document.getElementById('pass');
        if(input_pass.type == 'password') {
            input_pass.type = 'text';
            }else {
            input_pass.type = 'password';
            }
        });
   </script>
   <!-- sweet alert for registration success message -->
   <?php if(isset($_SESSION['user_success'])) { ?>
    <script>
        Swal.fire({
        position: 'top-center',
        icon: 'success',
        title: '<?= $_SESSION['user_success'] ?>',
        showConfirmButton: false,
        timer: 1500
        })
    </script>
    <?php } unset($_SESSION['user_success'])?>
   <!-- sweet alert for invalid extension error message -->
   <?php if(isset($_SESSION['extension_error'])) { ?>
    <script>
        Swal.fire({
        position: 'top-center',
        icon: 'error',
        title: '<?= $_SESSION['extension_error'] ?>',
        showConfirmButton: false,
        timer: 1500
        })
    </script>
    <?php } unset($_SESSION['extension_error'])?>
   <!-- sweet alert for file size error message -->
   <?php if(isset($_SESSION['size_error'])) { ?>
    <script>
        Swal.fire({
        position: 'top-center',
        icon: 'error',
        title: '<?= $_SESSION['size_error'] ?>',
        showConfirmButton: false,
        timer: 2000
        })
    </script>
    <?php } unset($_SESSION['size_error'])?>
  </body>
</html>