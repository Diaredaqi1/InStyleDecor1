

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/login.css">

	<title>Send confirmation link </title>
</head>

<body>
	<div class="container">
		<form action="resetrequest.php" method="POST" class="login-email">
        <p class="login-text" style="font-size: 2rem; font-weight: 800;">Reset your password</p>
            <p class="login-text">An email with be sent to you with instructions on how to reset your password.</p>
			<div class="input-group">
				<input type="email" placeholder="Enter your email address" name="email" value="" required>
			</div>
			<div class="input-group">
				<button type="submit" name="reset-request-submit" class="btn">Receive new password by mail</button>
			</div>
	</form>
	<?php
	if(isset($_GET["reset"])){
		if($_GET["reset"] == "success"){
			echo '<p class = "login-text">Check you email account  !</p>';
		}
	}

	?>
	</div>
</body>
</html>