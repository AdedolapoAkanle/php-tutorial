<?php
session_start();

require("connection.php");

function checkEmpty($arr) {
    for($i = 0; $i < sizeof($arr); $i++) {
        if(empty($arr[$i])) {
            return true;
        }
    }
}

function checkExistingUser($query) {
    if(mysqli_num_rows($query) > 0) {
        redirect("index.php", "error", "Username already exist.");
        exit;
    }
}

function redirect($page, $type, $msg) {
    header("Location: $page?$type=$msg");
}

function save($table, $sql) {
    global $connection;

    $sql = "INSERT INTO $table SET $sql";
    mysqli_query($connection, $sql);
}

function fetch($table, $fields="*", $conditions="") {
    global $connection;

    $con = !empty($conditions) ? "$conditions AND" : "";
    $sql = "SELECT $fields FROM $table WHERE $con status = 0";
    return mysqli_query($connection, $sql);
}