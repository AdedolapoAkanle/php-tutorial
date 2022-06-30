<?php

require("functions.php");

$username = $_POST['username'];
$password = $_POST['password'];
$pwd = sha1($password);
$course = $_POST['course'];

if(checkEmpty([$username, $pwd, $course])) {
    redirect("index.php", "error", "None of the fields must be empty");
    exit;
}

$query = fetch("profile", "username", "username='$username'");

checkExistingUser($query);

save("profile", "username='$username', password='$pwd', course='$course'");

redirect("index.php", "success", "Successful, You can now login");
exit;

// wild database
// profile table: id, username, password, status
// animal table: id, name, food, type, habitat, status