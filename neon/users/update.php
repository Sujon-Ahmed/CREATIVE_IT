<?php
session_start();
require '../db.php';
if(!isset($_POST['submit'])) {
    header('location:show.php');
} else {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $after_hash = password_hash($password, PASSWORD_BCRYPT);
    // check empty password
    if(empty($name)) {
        $_SESSION['name_error'] = "This felid are required!";
        header('location:edit_user.php');

    } elseif(empty($email)) {
        $_SESSION['email_error'] = "This felid are required!";
        header('location:edit_user.php');
    } elseif(empty($password)) {
        // when password felid empty but update with image
        if($_FILES['profile_image']['name'] != '') {
            $uploaded_file = $_FILES['profile_image'];
            $after_explode = explode('.',$uploaded_file['name']);
            $extension = end($after_explode);
            $allowed_extension = array('jpg', 'png', 'jpeg');
            if(in_array($extension, $allowed_extension)) {
                // check image size
                if($uploaded_file['size'] <= 2000000) {
                    // delete old image
                    $select_image = "SELECT * FROM users WHERE id='$id'";
                    $select_image_result = mysqli_query($con, $select_image);
                    $after_assoc = mysqli_fetch_assoc($select_image_result);
                    $delete_form = "../uploads/users/".$after_assoc['profile_image'];
                    unlink($delete_form);
                    // set new name and move to file new location
                    $file_name = $id.'.'.$extension;
                    $new_location = "../uploads/users/".$file_name;
                    move_uploaded_file($uploaded_file['tmp_name'], $new_location);
                    // update with image
                    $update_user = "UPDATE users SET `name`='$name', `email`='$email', `profile_image`='$file_name' WHERE id='$id'";
                    $update_user_result = mysqli_query($con, $update_user);
                    $_SESSION['update_success'] = "Update Success";
                    header('location:show.php');
                } else {
                    $_SESSION['size_error'] = "The file is too large. Allowed maximum size is 2 MiB.";
                    header('location:edit_user.php?id='.$id);
                }
            } else {
                $_SESSION['extension_error'] = "Invalid Extension!";
                header('location:edit_user.php?id='.$id);
            }
        } else {
            // update without image, password felid
            $update_user = "UPDATE users SET name='$name', email='$email' WHERE id='$id'";
            $update_user_result = mysqli_query($con, $update_user);
            $_SESSION['update_success'] = "Update Success";
            header('location:show.php');
        }
    } else {
        if (strlen($password) < 8) {
            $_SESSION['password_error'] = "At least 8 characters";
            header('location:edit_user.php?id='.$id);
        } else {
            // update image with password felid
            if($_FILES['profile_image']['name'] != '') {
                $uploaded_file = $_FILES['profile_image'];
                $after_explode = explode('.',$uploaded_file['name']);
                $extension = end($after_explode);
                $allowed_extension = array('jpg', 'jpeg', 'png');
                if(in_array($extension, $allowed_extension)) {
                    // file size check
                    if($uploaded_file['size'] <= 2000000) {
                        // delete old image
                        $select_image = "SELECT * FROM users WHERE id=$id";
                        $select_image_result = mysqli_query($con, $select_image);
                        $after_assoc = mysqli_fetch_assoc($select_image_result);
                        $delete_form = "../uploads/users/".$after_assoc['profile_image'];
                        unlink($delete_form);
                        // set new name with new location
                        $file_name = $id.'.'.$extension;
                        $new_location = "../uploads/users/".$file_name;
                        move_uploaded_file($uploaded_file['tmp_name'], $new_location);
                        // update all felid
                        $update_user = "UPDATE users SET name='$name', email='$email', password='$after_hash', profile_image='$file_name' WHERE id='$id'";
                        $update_user_result = mysqli_query($con, $update_user);
                        header('location:show.php');
                        
                    } else {
                        $_SESSION['size_error'] = "The file is too large. Allowed maximum size is 2 MiB.";
                    header('location:edit_user.php?id='.$id);
                    }
                } else {
                    $_SESSION['extension_error'] = "Invalid Extension";
                    header('location:edit_user.php?id='.$id);
                }
            } else {
                $update_user = "UPDATE users SET name='$name', email='$email', password='$after_hash' WHERE id='$id'";
                $update_user_result = mysqli_query($con, $update_user);
                header('location:show.php');
            }
        }
    }
}

?>