<?php
require_once("data_base.php");
session_start();
$full_name = $_POST['full-name'];
$email = $_POST['email'];

$sql = "SELECT * FROM users WHERE full_name = '$full_name' AND email = '$email'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
$_SESSION['id'] = $row['id'];

header("Location: profile.php");
} else {
    echo "0 results";
}