<?php
if(isset($_POST['sendbtn'])){
  $to = "blina.smailaj@student.uni-pr.edu"; // this is your Email address
  $from = $_POST['email']; // this is the sender's Email address
  $name = $_POST['name'];
  $message = $_POST['message'];
  $subject = 'inStyleDecor';

  $mailto = "instyledecorgrupi8@gmail.com";
  $headers = "From: ".$mailForm;
  $txt = 'You have recieved an email from '.$name.".\n\n".$message;

  $mail($mailto ,$subject,$txt , $headers);
  header("Location: contact.php?mailsend");
  
  }
?>