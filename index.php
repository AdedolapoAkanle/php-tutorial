<?php
	require("validations.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Student</title>
		<link rel="stylesheet" href="styles.css" />
	</head>
	<body>
		<?php
			
			if($success && $success !== ""){
				
				echo '<form method="POST" action="login.php">
					<div class="container">
						<div class="left">';
							
							if($success)
							echo "<div class='success'>$success</div>";
							
							echo '<input type="text" class="text-input" placeholder="Username" name="username" />
							<input type="password" class="text-input" placeholder="Password" name="password" />
							<input type="submit" value="login" class="submit" name="login" />
							
						</div>
						<div class="right"></div>
					</div>
				</form>
				<form method="POST" action="index.php">
		<input type="submit" value="Sign Up">
		</form>';
			} else {
				echo '<form method="POST" action="register.php">
					<div class="container">
						<div class="left">';
							
								if($error)
								echo "<div class='error'>$error</div>";
							
							echo '<input type="text" class="text-input" placeholder="Username" name="username" />
							<input type="password" class="text-input" placeholder="Password" name="password" />
							<input type="text" class="text-input" placeholder="Course" name="course" />
							<input type="submit" value="Register" class="submit" name="register" />
							
						</div>
						<div class="right"></div>
					</div>
				</form>';
			}
		?>
		
	</body>
</html>
