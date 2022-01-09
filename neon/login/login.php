<?php 
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- fontawesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
    <style>
        i.fa-eye {
            top: 42px;
            right: 15px;
            cursor: pointer;
            z-index: 1000;
        }
    </style>
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col-lg-6 col-md-6 m-auto mt-5">
                  <div class="card">
                      <div class="card-header bg-success text-light">
                          <h3 class="card-title">Login Form</h3>
                      </div>
                      <div class="card-body">
                          <form action="auth.php" method="POST">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="email">
                                </div>
                                <div class="mb-3 position-relative">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="pass">
                                    <i class="fa fa-eye position-absolute" id="eye"></i>

                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-success">Login</button>
                                </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Invalid Email Error Message -->
    <?php if(isset($_SESSION['email_error'])) { ?>
        <script>
            Swal.fire({
            icon: 'error',
            title: '<?= $_SESSION['email_error'] ?>',
            text: 'Something went wrong!'
            })
        </script>
    <?php } unset($_SESSION['email_error'])?>
    <!-- Invalid Password Error Message -->
    <?php if(isset($_SESSION['pass_error'])) { ?>
        <script>
            Swal.fire({
            icon: 'error',
            title: '<?= $_SESSION['pass_error'] ?>',
            text: 'Something went wrong!'
            })
        </script>
    <?php }  unset($_SESSION['pass_error']) ?>

    <!-- script for eye show and hide password -->
    <script>
        $('#eye').click(function() {
            var input_pass = document.getElementById('pass');
            if(input_pass.type = 'password') {
                input_pass.type = 'text';
            } else {
                input_pass.type = 'password';
            }
        })
    </script>
  </body>
</html>