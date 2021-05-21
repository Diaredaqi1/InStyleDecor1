
<html>
   <head en="lang">
      <meta charset="utf-8">
      <title>InStyleDecor</title>
      <title></title>
      <style>
       body{
         background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url('images/bg_2.jpg');
      }
         #forma1
         {
         margin-top: 45px;
         text-align: center;
         }
         input[type=text]
         {
         width: 30%;
         padding: 7px 13px;
         margin: 8px 0;
         box-sizing: border-box;
         }
         p
         {
         color:white;
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
   </head>
   <body>
      <?Php
         if(strlen(@$_COOKIE["InStyleDecor"]) > 0 ){
         echo "<p style='text-align:center'>HELLO :".$_COOKIE["InStyleDecor"]."</p>";
         
         echo "<br><br><p> Cookie is available. </p>";
         }else{
         echo "<p> No Cookie is set</p> ";
         }
         ?>
      <br><br><br>
      <p style="text-align:center;  "><a href=cookie1.php>Start a new cookie</a> | <a href=cookie2.php>Check the cookie </a> | <a href=cookie3.php>Remove the cookie </a>
       <br><br><a href="index.php">Return Home</a></p>
   </body>
</html>
