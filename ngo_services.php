<?php 
session_start();
if(isset($_SESSION['id']) && $_SESSION['user_name'] && $_SESSION['email']){


?>

<!-- <!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
</head>
<body>

<h1>Hello, </h1>
<a href="logout.php">Logout</a>

</body>
</html> -->



<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Unused Medicine Donation</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- owl carousel style -->
   <link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.min.css" />
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- fonts -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">

      
</head>

<body>
   <!--header section start -->
   <div class="header_section">
      <div class="header_bg">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="logo" href="home_ngo.php"><img src="images/logo.png" style="height: 80px;"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item ">
                        <a class="nav-link" href="home_ngo.php">Home</a>
                     </li>

                   

                     <li class="nav-item active">
                        <a class="nav-link" href="ngo_services.php">Services</a>
                     </li>

                        
                     
                    

                     
                     
                  </ul>
                  <div class="call_section">
                     <ul>
                        <li>Welcome, <?php echo $_SESSION['user_name']; ?></li>
                        <li><a href="logout.php" ><img src="images/logout-icon.png"> Logout</a></li>

                
                     </ul>
                  </div>
               </div>
            </nav>
         </div>
      </div>
      <!--banner section start -->
     
      <!--banner section end -->
   </div>
   <!--header section end -->
   <!-- services section start -->
   <div class="services_section layout_padding">
      <div class="container">
         <h1 class="services_taital"><span style="color: #fcce2d">Services</span></h1>
         <div class="services_section_2">
            <div class="row">
            <div class="col-md-4"></div>

               <div class="col-md-4">
                  <div class="image_main">
                     <img src="images/mail12.png" class="image_8" style="height: 300px">
                     <div class="text_main">
                        <div class="seemore_text"><a href="ngo_medicine_request.php" class="btn btn-primary">Medicine Request</a></div>
                     </div>
                  </div>
               </div>
               

               

              

               

            </div>
            
         </div>
      </div>
   </div>
   <!-- services section end -->
   <!-- about section start -->
   
   <!-- about section end -->
   <!-- blog section start -->
   <div class="blog_section layout_padding">
      <div class="container">
         
      </div>
   </div>
   <!-- blog section end -->
   <!-- client section start -->
   
   <!-- client section end -->
   <!-- newsletter section start -->
  
   <!-- newsletter section end -->

   <!-- contact section start -->
  
   <!-- contact section end -->
   <!-- footer section start -->
   <div class="footer_section layout_padding">
      <div class="container">
         
        
      </div>
   </div>
   <!-- footer section end -->
   <!-- copyright section start -->
   
   <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <!-- javascript -->
   <script src="js/owl.carousel.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>

<?php

}else{
    header("location: ngo_login.php");
    exit();
}
?>