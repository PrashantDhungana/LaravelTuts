<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   

      <!--header section start -->
      <div class="header_section">
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12">
                  <div class="logo"><a href="/home"><img src="images/logo.png"></a></div>
                  <div class="menu_text">
                     <ul>
                        <div class="togle_3">
                           <div class="shoping_bag"><a href="#"><img src="images/user-icon.png"></a>
                              <span class="padding_left_40"><a href="#"><img src="images/search-icon.png"></a></span>
                           </div>
                           <div id="myNav" class="overlay">
                              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                              <div class="overlay-content">
                                 <a href="/home">Home</a>
                                 <a href="/about">About</a>
                                 <a href="/blogg">Blog</a>
                                 <a href="/contact">Testimonial</a>
                                 <a href="/contact">Contact</a>
                              </div>
                           </div>
                           <span class="navbar-toggler-icon"></span>
                           <span onclick="openNav()"><img src="images/toogle-icon.png" class="toggle_menu"></span>
                        </div>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!-- banner section start -->
         <div class="banner_section">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <div class="banner_taital_section">
                        <h1 class="design_taital">We Do Design Blog For Business</h1>
                        <div class="contact_bt"><a href="#">Contact Us</a></div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div id="main_slider" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                           <div class="carousel-item active">
                              <div class="banner_img"><img src="images/banner-img.png"></div>
                           </div>
                           <div class="carousel-item">
                              <div class="banner_img"><img src="images/banner-img.png"></div>
                           </div>
                           <div class="carousel-item">
                              <div class="banner_img"><img src="images/banner-img.png"></div>
                           </div>
                        </div>
                        <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="contact_main">
                     <h1 class="contact_taital">Contact Us</h1>
                     <form action="{{route('contact.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Name" name="name">
                        </div>
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Phone Number" name="phone_number">
                        </div>
                        <div class="form-group">
                           <textarea class="massage-bt" placeholder="Message" rows="5" id="comment" name="message"></textarea>
                        </div>
                    <div>
                     <button type="submit" class="btn btn-lg btn-info form-control m-2" name="submit">SEND</button></div>
                  </div>

               </div>
               </form>
               <div class="col-lg-6">
                  <div class="testimonial_taital_main">
                     <div id="my_slider" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                           <div class="carousel-item active">
                              <h1 class="testimonial_taital">Testimonial</h1>
                              <div class="testimonial_left">
                                 <div class="client_img"><img src="images/client-img.png"></div>
                              </div>
                              <div class="testimonial_right">
                                 <h1 class="jack_text">Hindona</h1>
                                 <p class="dummy_text">Businessman</p>
                              </div>
                              <p class="lorem_text">That it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors nowthat it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors nowthat it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now</p>
                           </div>
                           <div class="carousel-item">
                              <h1 class="testimonial_taital">Testimonial</h1>
                              <div class="testimonial_left">
                                 <div class="client_img"><img src="images/client-img.png"></div>
                              </div>
                              <div class="testimonial_right">
                                 <h1 class="jack_text">Hindona</h1>
                                 <p class="dummy_text">Businessman</p>
                              </div>
                              <p class="lorem_text">That it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors nowthat it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors nowthat it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now</p>
                           </div>
                           <div class="carousel-item">
                              <h1 class="testimonial_taital">Testimonial</h1>
                              <div class="testimonial_left">
                                 <div class="client_img"><img src="images/client-img.png"></div>
                              </div>
                              <div class="testimonial_right">
                                 <h1 class="jack_text">Hindona</h1>
                                 <p class="dummy_text">Businessman</p>
                              </div>
                              <p class="lorem_text">That it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors nowthat it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors nowthat it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now</p>
                           </div>
                        </div>
                        <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- footer section start -->
      
      <!-- copyright section end -->
      <!-- Javascript files-->
      </body>
</html>