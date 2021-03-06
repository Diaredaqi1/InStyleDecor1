<!DOCTYPE html>
<html>
<head>
	<title>Hangman</title>
    <style>
    *  {font-family: 'Poppins', sans-serif;}
    body{ background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url('images/image_4.jpg');
}
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    </style>
</head>
<body style="font-size: 30px;">
<img src="hangman.png" style="position: absolute; left: 480px;">
<link rel="stylesheet" type="text/css" href="button.css">

<div style="position: absolute; top: 250px; left: 480px; font-family: sans-serif;">
<?php 

	session_start(); 
	
	$words = array("shkolla","fakulteti","librat","lapsi");
	
	$word = (!isset($_SESSION['word'])) ? $words[rand(0, count($words))] : $_SESSION['word'];
	$hangman = (!isset($_SESSION['hangman'])) ? 0 : $_SESSION['hangman'];
	$guessLength = (!isset($_SESSION['guessLength'])) ? 0 : $_SESSION['guessLength'];
	$alreadyGuessed = (!isset($_SESSION['alreadyGuessed'])) ? array() : $_SESSION['alreadyGuessed'];
	$message="you lost";
    $isGuessed="";
	$hangmanImage = array('&nbsp;&nbsp;O<br />', '--', '|', '--<br />', '&nbsp;&nbsp;/', '\\<br />');
	
 	if (!isset($_SESSION['display'])){
		$display = array();
		
		while (count($display) < strlen($word)) {
			$display[] = '_';
		}
	} else { 
		$display = $_SESSION['display'];
	}

	if ($guessLength < strlen($word) && $hangman < 6) { 
		$message = "";
		$match = false;
		$guess = isset($_POST['guess']) ? $_POST['guess'][0] : '';

		$positions = array();
		
		if (in_array(strtolower($guess), $alreadyGuessed)) {
			$message = "You already guessed '" . $guess . "'!";
			$isGuessed = true;
		}
		
		if (!$isGuessed && $guess != null) {
			$alreadyGuessed[] = strtolower($guess);
		
			for ($j = 0; $j < strlen($word); $j++) { 
				if (strcasecmp(substr($word, $j, 1), $guess) == 0) { 
					$match = true; 
					$positions[] = $j; 
				}
			}
			if ($match == true) { 
				foreach ($positions as $k => $position) { 
					if (strcmp($display[$position], '_') == 0) { 
						$display[$position] = $guess;
						$guessLength++;	
						if ($guessLength == strlen($word)) {
							$message = "Congrats, you win!";
						}
					}
				}
			} else {
				$hangman++; 
				if ($hangman == 6) {
					$message = "You lost, game over.";
				}
			}
		}
	}
	
	$_SESSION['word'] = $word;
	$_SESSION['display'] = $display;
	$_SESSION['hangman'] = $hangman;
	$_SESSION['guessLength'] = $guessLength;
	$_SESSION['alreadyGuessed'] = $alreadyGuessed;

	echo $hangman . ' bad guesses.<br />';

	foreach ($display as $l => $letter) {
		echo $letter . ' ';
	}

	echo '<br />' . $message . '<br />'; 
	echo 'You have already guessed: ' . implode(', ', $alreadyGuessed);
	if (isset($_POST["restart"]))
{
	if ($_POST['restart'] === "Home") {
		session_destroy();	
		header("Location: index.php");
	}}
?>
<div class="form-style-6">
<form method="post">
	Pick a letter... <br><input type="text" name="guess" maxlength="1" />
	<br>
	<input type="submit" value="Guess!" />
	<input type="submit" value="Home" name="restart" />
</form>
</div>
<?php
for ($i = 0; $i < $hangman; $i++) {
	echo $hangmanImage[$i];
}
?>
</div>
</body>
</html>