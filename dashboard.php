<?php
    require("functions.php");
    if(!isset($_SESSION['id'])) {
        redirect("index.php", "success", "User not found!");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>
    <h3>
        Welcome <?php echo $_SESSION['username']; ?>
    </h3>
    <form method="POST" action="logout.php">
        <input type="submit" value="Logout">
    </form>
</body>
</html>