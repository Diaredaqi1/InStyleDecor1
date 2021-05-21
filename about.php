<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>niture</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <script  src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>

     <div class="wrapper">

      <!-- end loader --> 
      <div class="sidebar">
         <!-- Sidebar  -->
        <nav id="sidebar">

            <div id="dismiss">
                <i class="fa fa-arrow-left"></i>
            </div>

            <ul class="list-unstyled components">
                
            <li class="active"> <a href="index.php">Home</a></li>
                <li> <a href="about.php">About</a></li>
                <li> <a href="product.php">Product</a></li>
                <li> <a href="blog.php">Blog</a></li>
                <li> <a href="contact.php">Contact us</a></li>
                <li><a href="cart.php">Cart</a></li>
            </ul>

        </nav>
      </div>
     
     <div id="content">
      <!-- header -->
      <?php
      require 'header.php';
      ?>
      <!-- end header -->
      <div class="contactus">
   <div class="container-fluid">
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="title">
                     <h2>About</h2>
                    <?php
                    echo substr("About us",0);
                    ?>
                  </div>
               </div>
            </div>
          </div>
</div>



<div class="about">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="aboutimg">
        <h3>About us</h3>
        <section class="pjesa1">
            <script>
              $(document).ready(function(){
              $(".hide-btn").click(function(){
              $(".writefile").toggle();
              });
              });
            </script>
              
              <div class="writefile" >
                <?php
                  $filename = "newfile.txt";
                  $file = fopen( $filename, "w" );
                  if( $file == false ) 
                  {
                    echo ( "Error in opening new file" );
                    exit();
                  }
                  fwrite( $file, "“To me, photography is an art of observation.\n 
                                  It’s about finding something interesting in an ordinary place… \n
                                  I’ve found it has little to do with the things you see and everything to do with the way you see them.”
                                  — Elliott Erwitt\n");

                ?>
                <?php
                  $filename = "newfile.txt";
                  //error handling
                  if(file_exists("newfile.txt")) 
                  {
                    $file = fopen($filename, "r");
                  } 
                  else 
                  {
                    die("Error: The file does not exist.");
                  }
                 //$file = fopen( $filename, "r" );
                  if( $file == false ) 
                  {
                    echo ( "Error in opening file" );
                    exit();
                  }
                  $filesize = filesize( $filename );
                  $filetext = fread( $file, $filesize );
                  fclose( $file );
                  echo ( "$filetext" );
                ?>

<?php
                  $filename = "newfile.txt";
                  //error handling
                  if(file_exists("newfile.txt")) 
                  {
                    $file = fopen($filename, "r");
                  } 
                  else 
                  {
                    die("Error: The file does not exist.");
                  }
                 //$file = fopen( $filename, "r" );
                  if( $file == false ) 
                  {
                    echo ( "Error in opening file" );
                    exit();
                  }
                  $filesize = filesize( $filename );
                  $filetext = fread( $file, $filesize );
                  fclose( $file );
                  echo ( "$filetext" );
                ?>
                </div>
<button type="button" class="hide-btn"><a href="#">  Hide Text   </a></button>
<br><br>
<?php
$arr =array('Best','Chair','in','Niture!');
echo implode(" ",$arr)."<br>";
?>
       <!-- <a href="#">Read More</a> -->
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="aboutimg">
        <figure><img src="images/chair.jpg"/></figure>
        </div>
      </div>
    </div>
  </div>
</div>
      <!--  footer --> 
     <?php
     require 'footer.php';
     ?>
      <!-- end footer -->
   </div>

</div>

   <div class="overlay"></div>

      <!-- Javascript files--> 
      <script src="js/jquery.min.js"></script> 
      <script src="js/popper.min.js"></script> 
      <script src="js/bootstrap.bundle.min.js"></script> 
      <script src="js/jquery-3.0.0.min.js"></script> 
      <script src="js/plugin.js"></script> 
      <!-- sidebar --> 
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script> 
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
     <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
      </script>


      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script> 
   </body>
</html>