<!doctype html public "-//w3c//dtd html 3.2//en">
<html>
   <head en="lang">
      <meta charset="utf-8">
      <title>InStyleDecor</title>
      
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
        button{
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        border-radius:30px;
        background-color: #0fbbad;
        }
        button:hover, button:visited{
            background-color: black;

        }
      </style>
   </head>
   <body  >
      <form method=post id='forma1' action=cookie.php>
         <p >Name:</p>
         <input type=text name=name>
         <button id="btn1">Next</button>
      </form>
      <br><br><br>
      <p><a href=cookie1.php>Start a new cookie </a> | <a href=cookie2.php>Check the cookie </a> | <a href=cookie3.php>Remove the cookie </a>
         <br><br><a href="index.php">Return Home</a></p>
   </body>
</html>
