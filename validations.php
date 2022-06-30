<?php
    $error = "";
    $success = "";
    if(isset($_GET['success'])) {
        $success = $_GET['success'];
    } else if(isset($_GET['error'])) {
        $error = $_GET['error'];
    }