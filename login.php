<?php 

include 'database.php';
include 'dbh.php';
include 'user.php';
include 'viewusers.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/login.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

	<title>Login</title>
</head>

<body>
<a href="index.php"><img src="images/home.png" style="position:fixed;left:5px;top:5px;"></a>
	<div class="container">
		<form action="" method="POST" class="login-email">
			
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
			<p class="login-register-text" style="text-align:center;">
			<?php
				if(isset($_GET["newpwd"])){
					if($_GET["newpwd"]=="passwordupdated"){
						echo '<p class ="login-register-text">Your password has been reset!</p>';
					}
				}
			?>
			<a href="resetpassword.php">Forgot your password?</a></p>
		</form>
			<div style="text-align:center;">
			<input id="button" type="submit"  value="Taken usernames" style="
		background-color:white;
		color:black;
		text-align:center;
		">  
			<div id="users" style="display:none;">
			<?php
					$users = new ViewUsers();
					$users ->showAllUsers();
			?>
			</div>
	</div>
	<script>
		$(document).ready(function () {
			$("#button").click(function () 
			{
				$("#users").slideToggle(500);
			}
			);
		});
	</script>
	</div>
</body>
</html>