
    <!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      
    
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="/css/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="/css/css/style.css">
      <link rel="stylesheet" type="text/css" href="/css/blog.css">

      <!-- Responsive-->
      <link rel="stylesheet" href="/css/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="/css/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="/css/css/owl.carousel.min.css">
      <link rel="stylesheet" href="/css/css/mero.css">
      <link rel="stylesheet" href="/css/css/blog.css">

      <link rel="stylesheet" href="/css/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <div class="container-fluid">
   <nav class="navbar navbar-expand-lg navbar-light bg-light ">

  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->

  <div class="collapse navbar-collapse p-3 " id="navbarTogglerDemo02">
  <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="navbar-brand" href="#">Home</a><span class="sr-only">(current)</span></a>
      </li>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="navbar-brand" href="/blog">Blog</a>
      </li>
      <li class="nav-item active">
        <a class="navbar-brand" href="#">Testimonial</a>
      </li>
      <li class="nav-item active">
        <a class="navbar-brand" href="#">Disabled</a>
      </li>
      <li class="nav-item active">
        <a class="navbar-brand" href="#">Disabled</a>
      </li>
    </ul>
    
  </div>
</nav>
    @yield('content')
    <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_main">
               <div class="footer_logo"><a href="/index"><img src="/images/footer-logo.png"></a></div>
               <div class="footer_menu">
                  <ul>
                     <li><a href="/index">Home</a></li>
                     <li><a href="/about">About</a></li>
                     <li><a href="/blogg">Blog</a></li>
                     <li><a href="/contact">Testimonial</a></li>
                     <li><a href="/contact">Contact</a></li>
                  </ul>
               </div>
               <div class="social_icon">
                  <ul>
                     <li><a href="#"><img src="/images/fb-icon.png"></a></li>
                     <li><a href="#"><img src="/images/twitter-icon.png"></a></li>
                     <li><a href="#"><img src="/images/linkedin-icon.png"></a></li>
                     <li><a href="#"><img src="/images/instagram-icon.png"></a></li>
                  </ul>
               </div>
            </div>
            <h1 class="subscribe_text">Subscribe Now</h1>
            <div class="input_bt">
               <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Enter Your Email" aria-label="Enter Your Email" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                     <button class="btn btn-outline-secondary" type="button"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                  </div>
               </div>
            </div>
            <div class="location_text">
               <ul>
                  <li>
                     <a href="#"><img src="images/call-icon.png">
                     <span class="padding_15">Call +01 1234567890</span></a>
                  </li>
                  <li>
                     <a href="#"><img src="images/mail-icon.png">
                     <span class="padding_15">demo@gmail.com</span></a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <p class="copyright_text">© 2020 All Rights Reserved.<a href="https://html.design"> Free  html Templates</a></p>
               </div>
            </div>
         </div>
      </div>
    <script src="/js/jquery.min.js"></script>
      <script src="/js/popper.min.js"></script>
      <script src="/js/bootstrap.bundle.min.js"></script>
      <script src="/js/jquery-3.0.0.min.js"></script>
      <script src="/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="/js/custom.js"></script>
      <!-- javascript --> 
      <script src="/js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <!-- Javascript files-->
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
      <script>
         function openNav() {
         document.getElementById("myNav").style.width = "100%";
         }
         function closeNav() {
         document.getElementById("myNav").style.width = "0%";
         }
      </script>  
    </body>
</html>