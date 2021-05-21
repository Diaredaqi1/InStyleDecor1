<?php
setcookie ("InStyleDecor", "", time()+86400);
?>
<html>
   <head en="lang">
      <meta charset="utf-8">
      <title>InStyleDecor</title>
      <title></title>
      <body>
      <style>
       body{
         background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url('images/bg_2.jpg');
      }
         #paragrafi
         {
            color:white;
         text-align:center;
         padding: 50px;
         font-face:Verdana;
         size:2;
         }
         p
         {
         text-align:center;
         font-family: Alegreya Sans SC; 
         font-size:25px;
         padding: 0 2px 0 20px;
         padding-top: 20px;
         margin: 20px 59px 20px 20px;
         
         }
         a:link, a:visited {
        color: white;
        padding: 14px 25px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        border-radius:30px;
        background-color: #0fbbad;
        }

        a:hover, a:active {
        background-color: black;
        }
      </style>
      <p id=paragrafi>Cookie is removed. </p>
      <br><br><br>
      <p><a href=cookie1.php>Start a new cookie </a> | <a href=cookie2.php>Check the cookie </a> | <a href=cookie3.php>Remove the cookie </a></p>
   </body>
</html>