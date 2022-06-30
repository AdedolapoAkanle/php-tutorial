<?php

require("functions.php");

$username = $_POST['username'];
$password = $_POST['password'];
$pwd = sha1($password);

if(checkEmpty([$username, $pwd])) {
    redirect("index.php", "success", "None of the fields must be empty");
    exit;
}

$query = fetch("profile", "*", "username='$username' AND password='$pwd'");

if(mysqli_num_rows($query) > 0) {
    $row = mysqli_fetch_array($query);
    $_SESSION['id'] = $row['id'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['course'] = $row['course'];

    redirect("dashboard.php", "success", "Logged in...");
} else {
    redirect("index.php", "success", "User not found!");
    exit;
}