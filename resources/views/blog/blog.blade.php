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
                  <div class="logo"><a href="index.html"><img src="/images/logo.png"></a></div>
                  <div class="menu_text">
                     <ul>
                        <div class="togle_3">
                           <div class="shoping_bag"><a href="#"><img src="/images/user-icon.png"></a>
                              <span class="padding_left_40"><a href="#"><img src="/images/search-icon.png"></a></span>
                           </div>
                           <div id="myNav" class="overlay">
                              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                              <div class="overlay-content">
                                 <a href="/blogg">Home</a>
                                 <a href="/about">About</a>
                                 <a href="/blogg">Blog</a>
                                 <a href=/testimonial">Testimonial</a>
                                 <a href="/contact">Contact</a>
                              </div>
                           </div>
                           <span class="navbar-toggler-icon"></span>
                           <span onclick="openNav()"><img src="/images/toogle-icon.png" class="toggle_menu"></span>
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
                        <div class="contact_bt"><a href="/contact">Contact Us</a></div>
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
      <!-- barber section start -->
   @foreach($blogs as $blog)
      <div class="barber_section layout_padding">
         <div class="container">
            <div class="braber_taital_main">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="barber_bg_main">
                        <h1 class="barber_taital">{{$blog->title}}</h1>
                        <p class="barber_text">{{$blog->body}}</p>
                        <div class="blogr_main">
                           <div class="blogr_left">
                              <p class="post_text">Post By :{{$blog->author_name}}</p>
                           </div>
                           <div class="blogr_right">
                              <div class="comment_text">
                                 <ul>
                                    <li><a href="#">Like<span class="padding_10"><i class="fa fa-thumbs-up"></i></span></a></li>
                                    <li><a href="#">Comment<span class="padding_10"><i class="fa fa-comment"></i></span></a></li>
                                    <li><a href="#">Share<span class="padding_10"><i class="fa fa-share-alt" aria-hidden="true"></i></span></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="fashion_img">
                        <!-- <img src="images/img-1.png" class="fashion_img"> -->
                        <img 
                        @if ($blog->image)
                src="/images/{{ $blog->image }}"
                @endif
                
                 height="100" width="100" alt="an image"></td>
                        <div class="read_bt">{{ now()->format('y-m-d') }}</div>
                     </div>
                  </div>
               </div>
            </div>
            @endforeach
            <!-- <div class="braber_taital_main">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="barber_bg_main">
                        <h1 class="barber_taital">Save Plants and save life</h1>
                        <p class="barber_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the lik</p>
                        <div class="blogr_main">
                           <div class="blogr_left">
                              <p class="post_text">Post By :  Blogr</p>
                           </div> -->
                           <!-- <div class="blogr_right">
                              <div class="comment_text">
                                 <ul>
                                    <li><a href="#">Like<span class="padding_10"><i class="fa fa-thumbs-up"></i></span></a></li>
                                    <li><a href="#">Comment<span class="padding_10"><i class="fa fa-comment"></i></span></a></li>
                                    <li><a href="#">Share<span class="padding_10"><i class="fa fa-share-alt" aria-hidden="true"></i></span></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="fashion_img">
                        <img src="images/img-2.png" class="fashion_img">
                        <div class="read_bt"><a href="#">05<br>FEB</a></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="braber_taital_main">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="barber_bg_main">
                        <h1 class="barber_taital">Fashion  New Model</h1>
                        <p class="barber_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the lik</p>
                        <div class="blogr_main">
                           <div class="blogr_left">
                              <p class="post_text">Post By :  Blogr</p>
                           </div>
                           <div class="blogr_right">
                              <div class="comment_text">
                                 <ul>
                                    <li><a href="#">Like<span class="padding_10"><i class="fa fa-thumbs-up"></i></span></a></li>
                                    <li><a href="#">Comment<span class="padding_10"><i class="fa fa-comment"></i></span></a></li>
                                    <li><a href="#">Share<span class="padding_10"><i class="fa fa-share-alt" aria-hidden="true"></i></span></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div>
                        <img src="images/img-3.png" class="fashion_img">
                        <div class="read_bt"><a href="#">05<br>FEB</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>  -->
      <!-- barber section end -->
      <!-- footer section start -->
     
      <!-- copyright section end -->
      <!-- Javascript files-->
     
     
      </body>
</html>