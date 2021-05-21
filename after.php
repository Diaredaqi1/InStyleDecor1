<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url('images/bg_2.jpg');
  
  /* Add the blur effect */
  filter: blur(10px);
  -webkit-filter: blur(0px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
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
</style>
</head>
<body>

<div class="bg-image"></div>

<div class="bg-text">
  <h2>Your Items Were Successfuly Ordered!</h2>
  <h2>Thank You For Choosing Us!</h2>
  <p ><a href="index.php"> Return Home</a></p>
  
</div>

</body>
</html>
