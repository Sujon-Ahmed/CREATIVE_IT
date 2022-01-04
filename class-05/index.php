<?php 
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title here -->
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awesome 4.7 cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- custom css -->
    <style>
        section {
            width: 100vw;
            height: 100vh;
            background-color: dodgerblue;
        }
    
    </style>
  </head>
  <body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto mt-5">
                    <div class="card shadow">
                        <h5 class="card-header bg-primary text-light text-center">Login</h5>
                        <div class="card-body">
                            <form action="post.php" method="POST">
                                <!-- name input felid -->
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                   <?php
                                        if(isset($_SESSION['name_err'])) {
                                            ?>
                                                <span style="color: red;"><?php echo $_SESSION['name_err']; ?></span>
                                            <?php
                                        }unset($_SESSION['name_err']);
                                   ?>
                                </div>
                                <!-- email input felid -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" name="email">
                                    <?php
                                        if(isset($_SESSION['email_err'])) {
                                            ?>
                                                <span style="color: red;"><?php echo $_SESSION['email_err']; ?></span>
                                            <?php
                                        }unset($_SESSION['email_err']);
                                   ?>
                                </div>
                                <!-- password input felid -->
                                <div class="mb-3 position-relative">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                    <?php
                                        if(isset($_SESSION['pass_err'])) {
                                            ?>
                                                <span style="color: red;"><?php echo $_SESSION['pass_err']; ?></span>
                                            <?php
                                        } unset($_SESSION['pass_err']);
                                    ?>
                                    <i id="click" class="fa fa-eye position-absolute" style="top: 33px;right: 0px;cursor: pointer;background-color: #ddd;width: 39px;height: 36px;line-height: 36px;margin-right: 0px;text-align: center;"></i>
                                </div>
                                <!-- confirm password input felid -->
                                <div class="mb-3 position-relative">
                                    <label for="password" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="" name="confirm_password">
                                    <?php
                                        if(isset($_SESSION['con_pass_err'])) {
                                            ?>
                                                <span style="color: red;"><?php echo $_SESSION['con_pass_err']; ?></span>
                                            <?php
                                        } unset($_SESSION['con_pass_err']);
                                    ?>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Jquery cdn link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- custom script -->
    <script>
        $('#click').click(function() {
           var password_input = document.getElementById('password');
           if(password_input.type == 'password') {
               password_input.type = 'text';
           } else {
               password_input.type = 'password';
           }
        });
    </script>
  </body>
</html>