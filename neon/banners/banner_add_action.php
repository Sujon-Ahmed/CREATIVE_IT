<?php
session_start();
require '../db.php';
if (isset($_POST['submit'])) {
    $sub_title = $_POST['sub_title'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    // image upload here
    if (!empty($_FILES['file']['name'])) {
        $file_name = $_FILES['file']['name'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $extension = explode('.',$file_name);
        $actual_extension = strtolower(end($extension));
        $file_size = $_FILES['file']['size'];
        $allowed_extension = array('jpg','jpeg','png');
        // check in_array function
        if (in_array($actual_extension, $allowed_extension)) {
            // check file size
            if ($file_size <= 1000000) {
                $file_error = $_FILES['file']['error'];
                // check file error
                if ($file_error == 0) {
                    $file_new_name = uniqid('',true).'.'.$actual_extension;
                    $file_destination = "../uploads/banners/".$file_new_name;
                    move_uploaded_file($file_tmp, $file_destination);
                    $insert_data = "INSERT INTO `banners`(`banner_sub_title`, `banner_title`, `banner_description`, `banner_image`) VALUES ('$sub_title','$title','$description','$file_new_name')";
                    $insert_data_result = mysqli_query($con, $insert_data);
                    $_SESSION['upload_success'] = "Banner Uploads Successfully";
                    header('location:add_banner.php');
                } else {
                    $_SESSION['file_error'] = "File Error!";
                    header('location:add_banner.php');
                }
            } else {
                $_SESSION['large_file_error'] = "This file too large!";
                header('location:add_banner.php');
            }

        } else {
            $_SESSION['ext_error'] = "This file extension not allowed!";
            header('location:add_banner.php');
        }
    } else {
        $_SESSION['empty_img'] = "Select an Image!";
        header('location:add_banner.php');
    }
} else {
    header('location:add_banner.php');
}




?>