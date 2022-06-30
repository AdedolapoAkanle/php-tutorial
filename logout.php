<?php

require("functions.php");
    
    $_SESSION['id'] = "";
    session_destroy();    
    redirect("index.php", "success", "Logged Out!");
    exit;