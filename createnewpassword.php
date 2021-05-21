<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/login.css">

	<title>Login</title>
</head>

<body>
	<div class="container">
    <?php
        $selector = $_GET["selector"];   
        $validator = $_GET["validator"];
        
        if(empty($selector) || empty($validator)){
            echo "Could not validate your request!";
        }
        //check for valid hexadecimal format
        else{
            if(ctype_xdigit($selector) !==false && ctype_xdigit($validator) !==false){
                ?>
                
            <form action="resetpassword.inc.php" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="hidden" placeholder="Email" name="selector" value="<?php echo $selector; ?>">
			</div>
            <div class="input-group">
				<input type="hidden" placeholder="Email" name="validator" value="<?php echo $validator; ?>">
			</div>
			<div class="input-group">
				<input type="password" placeholder="Enter a new password" name="pwd" value="<?php echo $_POST['password']; ?>" required>
			</div>
            <div class="input-group">
				<input type="password" placeholder="Repeat new password" name="new-pwd" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button type ="submit" name="reset-password-submit" class="btn">Reset password</button>
			</div>
                <?php
            }
        }
    ?>
	</div>
</body>
</html>