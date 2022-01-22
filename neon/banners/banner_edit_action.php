<?php
session_start();
require '../db.php';
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $sub_title = $_POST['sub_title'];
    $title = $_POST['title'];
    $old_image = $_POST['old_file'];
    $description = $_POST['description'];
    // check input felid empty
    if ($sub_title != '' && $title != '' && $description != '') {
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
                        unlink("../uploads/banners/".$after_assoc['banner_image']);
                        $update_data = "UPDATE `banners` SET `banner_sub_title`='$sub_title',`banner_title`='$title',`banner_description`='$description',`banner_image`='$file_new_name' WHERE `banner_id` = $id";
                        $update_data_result = mysqli_query($con, $update_data);
                        $_SESSION['update_success'] = "Banner Update Successfully";
                        header('location:view_banner.php');
                    } else {
                        $_SESSION['file_error'] = "File Error!";
                        header('location:edit_banner.php?banner_id='.$id);
                    }
                } else {
                    $_SESSION['large_file_error'] = "This file too large!";
                    header('location:edit_banner.php?banner_id='.$id);
                }
            } else {
                $_SESSION['ext_error'] = "This file extension not allowed!";
                header('location:edit_banner.php?banner_id='.$id);
            }
        } else {
            $update_data = "UPDATE `banners` SET `banner_sub_title`='$sub_title',`banner_title`='$title',`banner_description`='$description', `banner_image`='$old_image' WHERE `banner_id` = $id";
            $update_data_result = mysqli_query($con, $update_data);
            $_SESSION['update_success'] = "Banner Update Successfully";
            header('location:view_banner.php');
        }
    } else {
        $_SESSION['required'] = "All felid are required!";
        header('location:edit_banner.php?banner_id='.$id);
    }
} else {
    header('location:edit_banner.php');
}
?>