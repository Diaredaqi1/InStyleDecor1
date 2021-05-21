<?php
if(isset($_POST["reset-request-submit"])){
    //token
    $selector = bin2hex(random_bytes(8));
    //authenticates user
    $token = random_bytes(32);
    //duhet me ndryshu url kur ta qesim nweb
    $url = "www.instyledecor.net/createnewpassword.php?selector=".$selector."&validator=".bin2hex($token);
    
    $expires = date("U") + 1800 ;//SECONDS (one hour)

     require 'database.php';

     $userEmail = $_POST["email"]; 
     //deleting previous tokens if any
     $sql = "DELETE FROM pwdReset where pwdResetEmail=?";
     $stmt = mysqli_stmt_init($conn);
     if(!mysqli_stmt_prepare($stmt , $sql)){
        echo "There was an error!";
        exit();
     }else{
         mysqli_stmt_bind_param($stmt , "s" , $userEmail);
         mysqli_stmt_execute($stmt);
     }

     $sql = "INSERT INTO pwdReset(pwdResetEmail ,pwdResetSelector , pwdResetToken , pwdResetExpiresS) 
     VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
     if(!mysqli_stmt_prepare($stmt , $sql)){
        echo "There was an error!";
        exit();
     }else{
         $hashedToken = password_hash($token , PASSWORD_DEFAULT);
         mysqli_stmt_bind_param($stmt , "ssss" , $userEmail , $selector , $hashedToken , $expires);
         mysqli_stmt_execute($stmt);
     }

        mysqli_stmt_close($stmt);
        mysqli_close();

        $to = $userEmail ; 
        $subject = "Reset your password for instyledecor";
        $message = '<p>We recieved a password request . The link to reset your password is below . If you did not
        make this request , you can ignore this email !></p>';
        $message.='<p>Here is your password reset link : </br>';
        $message.='<a href ="0 '.$url.'">'.$url.'</a></p>';

        $headers = "From : instyledecor <instyledecorgrupi8@gmail.com>\r\n";
        $headers.="Reply-To : instyledecorgrupi8@gmail.com>\r\n";
        $headers.="Content-type :text/html\r\n";

        mail($to , $subject , $message , $headers);
        header("Location: resetpasword.php?resetpas = success");
  
    }else{
    header("Location: index.php");
}
?>