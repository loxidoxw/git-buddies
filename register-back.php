<?php
require_once("data_base.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["full-name"];
    $email = $_POST["email"];
    $check_user = "SELECT * FROM users WHERE full_name = '$full_name'";
    if ($full_name != null || $email != null)
    {
        if ($full_name != $check_user ){
            $sql = "INSERT INTO users (full_name, email) VALUES ('$full_name', '$email')";
            $conn->query($sql);
            header("location: login-form.php");
            }
        else {
            echo "User name or email already exists.";
        }
    }
    else {
        echo "Fill in all fields.";
    }
}

