<?php

session_start();
if (isset($_POST['name'])) {

    if (empty($_POST['name']) || empty($_POST['contact-email']) || empty($_POST['phone'])) {
        $error = "All the field is required";
        $_SESSION['error'] = $error;
        header("Location: welcome.php");
    } else if (!filter_var($_POST['contact-email'], FILTER_VALIDATE_EMAIL)) {
        $error = "Enter your valid email address";
        $_SESSION['error'] = $error;
        header("Location: welcome.php");
    } else if (strlen($_POST['phone']) != 10 ) {
        $error = "Enter 10 digit Phone Number without country code";
        $_SESSION['error'] = $error;
        header("Location: welcome.php");
    } else {

        //connect to the database
        $conn = mysqli_connect("localhost", "root", "", "zoho");
        $name = $_POST['name'];
        $email = $_POST['contact-email'];
        $phone = $_POST['phone'];
        $is_done = $conn->query("INSERT INTO `contact_us`( `name`, `email`, `phone` ) VALUES( '$name','$email','$phone' )");
        if ($is_done == TRUE) {
            $success = "success";
            $_SESSION['success'] = $success;
            header("Location: welcome.php");
        }
    }
}
