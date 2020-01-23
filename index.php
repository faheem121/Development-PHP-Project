<?php  
include("connection.php");
// include("function/functions.php");


?>
<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from magicclubgroup.com/bapor/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Jan 2020 19:47:10 GMT -->
<head>
      <meta charset="utf-8">
      <title>Bapor - Responsive Ecommerce Html Template</title>
      <meta name="description" content="Bapor Template" />
      <meta name="keywords" content="bapor, WooCommerce, bootstrap, html template, bapor template">
      <meta name="author" content="bapor" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <!--[if IE]>
      <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
      <![endif]-->
      <!-- Favicone Icon -->
      <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
      <link rel="icon" type="img/png" href="img/favicon.png">
      <link rel="apple-touch-icon" href="img/favicon.png">
      <!-- start css -->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <!-- bootstrap css -->
      <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
      <!-- fontawesome css -->
      <link href="css/animate.min.css" rel="stylesheet" type="text/css" />
      <!-- animate css -->
      <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" />
      <!-- owl carousel css -->      
      <link href="css/style.css" rel="stylesheet" type="text/css" />
      <!-- style css -->
      <!-- end css -->
   </head>
   <body>
   
   <?php include ("header.php") ?> 
         <!-- Page Wraper -->
         <div class="page-wraper">
            <!-- slider -->
            <section id="intro" class="intro">
               <!-- Owl Main Slider -->
               <div id="owl-slider" class="owl-slider owl-carousel owl-theme">
                  <!--Slide Item-->
                  <div class="slider_item dark-bg slider-bg-image" data-background-img="img/slider/slider_bg1.jpg" data-bg-position="center center" data-height="600">
                     <div class="container">
                        <div class="slider_caption text-right">
                           <h1 class="slider_title">50-80% OFF</h1>
                           <h3 class="slider_caption_desc">ALL SALE PRICES REVEALED</h3>
                           <a href="#" class="btn btn-md btn-white">See More</a>                               
                        </div>
                     </div>
                  </div>
                  <!--Slide Item-->
                  <div class="slider_item dark-bg slider-bg-image" data-background-img="img/slider/slider_bg2.jpg" data-bg-position="center center" data-height="600">
                     <div class="container">
                        <div class="slider_caption">
                           <h1 class="slider_title">Big Sale 30% OFF</h1>
                           <h3 class="slider_caption_desc">Prepare Your cart Now!</h3>
                           <a href="#" class="btn btn-md btn-color">Shop Now</a>                               
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Owl Main Slider -->
            </section>
            <!-- slider --> 
            <!-- categorybanner--> 
            <section id="categorybanner" class="categorybanner">
               <div class="col-md-12">
                  <div class="row">
                     <!-- item-->
                     <div class="col-md-4 categorybanner_item">
                        <div class="categorybanner_image">
                           <img src="img/banner/banner1.jpg" alt="banner1" />
                        </div>
                        <div class="categorybanner_title dark-bg">
                           <h5><a href="#">Women's Formal Wear</a></h5>
                           <h3> 20-50% Off</h3>
                        </div>
                     </div>
                     <!-- item-->
                     <div class="col-md-4 categorybanner_item">
                        <div class="categorybanner_image">
                           <img src="img/banner/banner2.jpg" alt="banner1" />
                        </div>
                        <div class="categorybanner_title dark-bg">
                           <h5><a href="#">Men's Formal Wear</a></h5>
                           <h3> 50-80% Off </h3>
                        </div>
                     </div>
                     <!-- item-->
                     <div class="col-md-4 categorybanner_item">
                        <div class="categorybanner_image">
                           <img src="img/banner/banner3.jpg" alt="banner1" />
                        </div>
                        <div class="categorybanner_title text-left">
                           <h5><a href="#">Kid's</a></h5>
                           <h3> Up To 80% Off </h3>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- categorybanner-->  
            <!-- promo-->
            <section id="promo" class="section-padding promo">
               <div class="container">
                  <div class="promo-box row">
                     <!-- item -->
                     <div class="col-md-4 mb-sm-30 promo-item">
                        <div class="promo-item-inner">
                           <div class="promo-icon">
                              <i class="fa fa-money" aria-hidden="true"></i>
                           </div>
                           <div class="promo-info">
                              <h6><a href="#">Money Back</a></h6>
                              <p class="italic">30 Days Guarantee</p>
                           </div>
                        </div>
                     </div>
                     <!-- item -->
                     <div class="col-md-4 mb-sm-30 promo-item">
                        <div class="promo-item-inner">
                           <div class="promo-icon">
                              <i class="fa fa-truck" aria-hidden="true"></i>
                           </div>
                           <div class="promo-info">
                              <h6><a href="#">Free Shipping</a></h6>
                              <p class="italic">Secure & Fast Shipping</p>
                           </div>
                        </div>
                     </div>
                     <!-- item -->
                     <div class="col-md-4 promo-item">
                        <div class="promo-item-inner">
                           <div class="promo-icon">
                              <i class="fa fa-question" aria-hidden="true"></i>
                           </div>
                           <div class="promo-info">
                              <h6><a href="#">24 X 7 Support</a></h6>
                              <p class="italic">Quick Support Service</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- promo-->
            <!-- promo banner-->
            <section id="promo-banner" class="section-padding-bottom promo-banner">
               <div class="container">
                  <!-- heading -->
                  <div class="section-heading text-center">
                     <h2>Shop By Category</h2>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                  </div>
                  <!-- heading -->
               </div>
               <div class="container">
                  <div class="row">
                     <!-- banner -->
                     <div class="col-md-6 mb-30">
                        <div class="promo-banner-wraper">
                           <a href="#">
                           <img src="img/banner/cat_1.jpg" alt="" />
                           </a>
                        </div>
                     </div>
                     <!-- banner -->
                     <!-- banner -->
                     <div class="col-md-6 mb-30">
                        <div class="promo-banner-wraper">
                           <a href="#">
                           <img src="img/banner/cat_2.jpg" alt="" />
                           </a>
                        </div>
                     </div>
                     <!-- banner -->
                     <!-- banner -->
                     <div class="col-md-12">
                        <div class="promo-banner-wraper">
                           <a href="#">
                           <img src="img/banner/cat_3.jpg" alt="" />
                           </a>
                        </div>
                     </div>
                     <!-- banner -->
                  </div>
               </div>
            </section>
            <!-- promo banner -->
            <!-- festival seasons -->
            <section id="festival-seasons" class="section-padding-bottom festival-seasons">
               <div class="container">
                  <div class="festival-seasons-inner overlay-dark50 dark-bg">
                     <h3 class="text-center normal">Up to 50% Off Get Ready Early Access & <a class="text-uppercase">Shop Now</a></h3>
                  </div>
               </div>
            </section>
            <!-- festival seasons -->
            <!-- featured collecations -->
           <section id="featured-collecations" class="section-padding-bottom featured-collecations">
               <div class="container">
                  <!-- heading -->
                  <div class="section-heading text-center">
                     <h2>Featured Collections</h2>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                  </div>
                  <!-- heading -->
                  <ul class="product-tab nav" role="tablist">
                  
         <?php  
         
         $get_cats="SELECT * FROM gender";
         $run_cats=mysqli_query($con, $get_cats);

         while ($row_cats=mysqli_fetch_assoc($run_cats)) {

         $gender_id=$row_cats['gender_id'];
         $gender_title=$row_cats['gender_title'];

         ?>            
                     <li class="nav-item"><a class="nav-link" href="index.php?gender=<?php echo $gender_id; ?>"><?php echo $gender_title; ?></a></li>

                     <?php } ?>

                     <li class="nav-item"><a class="nav-link" href="index.php">All products</a></li> 
                    
                  </ul>

                 
                  <div class="tab-content">
                     <div class="row">
                                     <?php
               if (isset($_GET['gender'])) {
               }
                                                              
              else{ 
               $get_products="SELECT * FROM products";
               $run_products=mysqli_query($con, $get_products);

               while ($row_products=mysqli_fetch_assoc($run_products)) {
                  
                  $pro_id=$row_products['product_id'];
                  $p_title=$row_products['product_title'];
                  $p_img1=$row_products['img1'];
                  $p_img2=$row_products['img2'];
                  $p_price=$row_products['product_price'];

               ?>    <!-- Tab1 -->
               
                     <div id="footwear" class="tab-pane fade in active show" role="tabpanel">
                        <div id="footwear-product" class="carousel-item-4 owl-carousel owl-theme theme-carousel">
                           <!-- item -->

                           <div class="product-item">
                
                              
                              <div class="product-item-wraper">
                                
                                 <div class="product-image-wraper">
                                     
                                    <a href="product_detail.php?pro_id=<?= $pro_id ?>"><img src="admin/upload_images/<?php echo $p_img1; ?>" alt="" data-src="admin/upload_images/<?php echo $p_img2; ?>" style="width:730px; height: 200px;" /></a>
                                 </div>
                                 <div class="product-item-button">
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    <a href="product_detail.php?pro_id=<?= $pro_id ?>" data-toggle="tooltip" data-placement="left" title="Add to Cart"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to Compare"><i class="fa fa-random" aria-hidden="true"></i></a>
                                 </div>
                              </div>
                              <div class="product-item-detail">
                                 <p class="product-title"><a href="product_detail.html"><?php echo $p_title; ?></a></p>
                                 <h6 class="product-price color"><del>$99</del>$<?php echo $p_price; ?></h6>
                                 
                              </div>
                              
                           </div>
                           
                           <!-- item -->
                           <!--   -->
                        </div>
                     </div>
                  <?php }} ?>
                  </div>
                  </div>
               </div>
            </section>
                  <div class="tab-content container">
                  <div class="row">
                                     <?php
               if (isset($_GET['gender'])) {
                                                                  
               
               $gender_id=$_GET['gender'];

            $get_cat_pro= "SELECT * from products where gender_id='$gender_id'";
            $run_cat_pro= mysqli_query($con, $get_cat_pro);
             
            if (mysqli_num_rows($run_cat_pro)==0) {
               echo "<h2>No Products found in this Category!</h2>";
            }
            while ($row_gender_pro=mysqli_fetch_array($run_cat_pro)) {
               
               $pro_id=$row_gender_pro['product_id'];
               $p_title= $row_gender_pro['product_title'];
               $p_price= $row_gender_pro['product_price'];
               $p_image1= $row_gender_pro['img1'];
               $p_image2= $row_gender_pro['img2'];

               ?>    <!-- Tab1 -->
               
                     <div id="footwear" class="tab-pane fade in active show" role="tabpanel">
                        <div id="footwear-product" class="carousel-item-4 owl-carousel owl-theme theme-carousel">
                           <!-- item -->

                           <div class="product-item">
                
                              
                              <div class="product-item-wraper">
                                
                                 <div class="product-image-wraper">
                                     
                                    <a href="product_detail.php?pro_id=<?= $pro_id ?>"><img src="admin/upload_images/<?php echo $p_image1; ?>" alt="" data-src="admin/upload_images/<?php echo $p_image2; ?>" style="width:760px; height:250px; "  /></a>
                                 </div>
                                 <div class="product-item-button">
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    <a href="product_detail.php?pro_id=<?= $pro_id ?>" data-toggle="tooltip" data-placement="left" title="Add to Cart"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to Compare"><i class="fa fa-random" aria-hidden="true"></i></a>
                                 </div>
                              </div>
                              <div class="product-item-detail">
                                 <p class="product-title"><a href="product_detail.php?pro_id=<?= $pro_id ?>"><?php echo $p_title; ?></a></p>
                                 <h6 class="product-price color"><del>$99</del>$<?php echo $p_price; ?></h6>
                                 
                              </div>
                              
                           </div>
                           
                           <!-- item -->
                           <!--   -->
                        </div>
                     </div>
                  <?php }} ?>
                  </div>
                  </div>
               </div>
            </section>
            <!-- featured collecations -->
            <!-- testimonial -->
            <section id="hometestimonial" class="section-padding container-fluid bg-image" data-background-img="img/bg/bg_2.jpg" data-bg-position="right bottom">
               <div class="container">
                  <!-- heading -->
                  <div class="section-heading text-center">
                     <h2>Testimonial</h2>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                  </div>
                  <!-- heading -->
                  <div class="testimonial-wraper">
                     <div class="testimonial-carousel-1 dark-bg owl-carousel owl-theme theme-carousel">
                        <!-- item -->
                        <div class="testimonial-item">
                           <div class="testimonial-item-wraper">
                              <div class="testimonial-images">
                                 <img src="img/review/2.jpg" alt="" />
                              </div>
                              <div class="testimonial-desciption">
                                 <div class="testimonial-text">
                                    <p class="large">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words.</p>
                                 </div>
                                 <div class="testimonial-rating">
                                    <ul class="star-rating">
                                       <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                       <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                       <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                       <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                       <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    </ul>
                                 </div>
                                 <h6 class="testimonial-author color">John Doe</h6>
                              </div>
                           </div>
                        </div>
                        <!-- item -->
                        <div class="testimonial-item">
                           <div class="testimonial-item-wraper">
                              <div class="testimonial-images">
                                 <img src="img/review/2.jpg" alt="" />
                              </div>
                              <div class="testimonial-desciption">
                                 <div class="testimonial-text">
                                    <p class="large">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words.</p>
                                 </div>
                                 <div class="testimonial-rating">
                                    <ul class="star-rating">
                                       <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                       <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                       <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                       <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                       <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    </ul>
                                 </div>
                                 <h6 class="testimonial-author color">John Doe</h6>
                              </div>
                           </div>
                        </div>
                        <!-- item -->
                        <div class="testimonial-item">
                           <div class="testimonial-item-wraper">
                              <div class="testimonial-images">
                                 <img src="img/review/2.jpg" alt="" />
                              </div>
                              <div class="testimonial-desciption">
                                 <div class="testimonial-text">
                                    <p class="large">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words.</p>
                                 </div>
                                 <div class="testimonial-rating">
                                    <ul class="star-rating">
                                       <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                       <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                       <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                       <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                       <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    </ul>
                                 </div>
                                 <h6 class="testimonial-author color">John Doe</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- tem -->
                        <div class="testimonial-item">
                           <div class="testimonial-item-wraper">
                              <div class="testimonial-images">
                                 <img src="img/review/2.jpg" alt="" />
                              </div>
                              <div class="testimonial-desciption">
                                 <div class="testimonial-text">
                                    <p class="large">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words.</p>
                                 </div>
                                 <div class="testimonial-rating">
                                    <ul class="star-rating">
                                       <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                       <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                       <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                       <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                       <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    </ul>
                                 </div>
                                 <h6 class="testimonial-author color">John Doe</h6>
                              </div>
                           </div>
                        </div>
                        <!-- item -->
                        <div class="testimonial-item">
                           <div class="testimonial-item-wraper">
                              <div class="testimonial-images">
                                 <img src="img/review/2.jpg" alt="" />
                              </div>
                              <div class="testimonial-desciption">
                                 <div class="testimonial-text">
                                    <p class="large">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words.</p>
                                 </div>
                                 <div class="testimonial-rating">
                                    <ul class="star-rating">
                                       <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                       <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                       <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                       <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                       <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    </ul>
                                 </div>
                                 <h6 class="testimonial-author color">John Doe</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- testimonial -->
            <!-- homepost -->
            <section id="homepost" class="section-padding homepost">
               <div class="container">
                  <!-- heading -->
                  <div class="section-heading text-center">
                     <h2>Latest News</h2>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                  </div>
                  <!-- heading -->
                  <div class="homepost-wraper">
                     <div class="carousel-item-3 owl-carousel owl-theme theme-carousel">
                        <!-- item -->                                      
                        <div class="homepost-item">
                           <div class="homepost-item-image">
                              <img src="img/blog/blog_01.jpg" alt="" />
                              <div class="post-date">
                                 <div class="post-date-info">
                                    <span>30</span>
                                    March
                                 </div>
                              </div>
                           </div>
                           <div class="homepost-box-wraper">
                              <h4 class="post-title"><a href="blog_detail.html">Seven Reliable Sources of Fashion</a></h4>
                              <p class="post-text">Redug Lagre dolor sit amet, consectetur adipisicing elit. Minima in nostrum, veniam. Esse est assumenda inventore.</p>
                              <p class="post-more"><a href="blog_detail.html">Read More...</a></p>
                              <p class="postmeta">
                                 <span class="post-author">
                                 <i class="fa fa-user"></i>
                                 By <a href="#">Admin</a>
                                 </span>
                                 <span class="post-comment">
                                 <i class="fa fa-comments-o"></i>
                                 <a href="#">6 Comments</a>
                                 </span>                             
                              </p>
                           </div>
                        </div>
                        <!-- item -->                                      
                        <div class="homepost-item">
                           <div class="homepost-item-image">
                              <img src="img/blog/blog_02.jpg" alt="" />
                              <div class="post-date">
                                 <div class="post-date-info">
                                    <span>30</span>
                                    March
                                 </div>
                              </div>
                           </div>
                           <div class="homepost-box-wraper">
                              <h4 class="post-title"><a href="blog_detail.html">Why You Must Experience Fashion</a></h4>
                              <p class="post-text">Redug Lagre dolor sit amet, consectetur adipisicing elit. Minima in nostrum, veniam. Esse est assumenda inventore.</p>
                              <p class="post-more"><a href="blog_detail.html">Read More...</a></p>
                              <p class="postmeta">
                                 <span class="post-author">
                                 <i class="fa fa-user"></i>
                                 By <a href="#">Admin</a>
                                 </span>
                                 <span class="post-comment">
                                 <i class="fa fa-comments-o"></i>
                                 <a href="#">9 Comments</a>
                                 </span>                             
                              </p>
                           </div>
                        </div>
                        <!-- item -->                                   
                        <div class="homepost-item">
                           <div class="homepost-item-image">
                              <img src="img/blog/blog_03.jpg" alt="" />
                              <div class="post-date">
                                 <div class="post-date-info">
                                    <span>30</span>
                                    March
                                 </div>
                              </div>
                           </div>
                           <div class="homepost-box-wraper">
                              <h4 class="post-title"><a href="blog_detail.html">Ten Ways To Introduce Fashion</a></h4>
                              <p class="post-text">Redug Lagre dolor sit amet, consectetur adipisicing elit. Minima in nostrum, veniam. Esse est assumenda inventore.</p>
                              <p class="post-more"><a href="blog_detail.html">Read More...</a></p>
                              <p class="postmeta">
                                 <span class="post-author">
                                 <i class="fa fa-user"></i>
                                 By <a href="#">Admin</a>
                                 </span>
                                 <span class="post-comment">
                                 <i class="fa fa-comments-o"></i>
                                 <a href="#">10 Comments</a>
                                 </span>                             
                              </p>
                           </div>
                        </div>
                        <!-- item -->
                        <div class="homepost-item">
                           <div class="homepost-item-image">
                              <img src="img/blog/blog_04.jpg" alt="" />
                              <div class="post-date">
                                 <div class="post-date-info">
                                    <span>30</span>
                                    March
                                 </div>
                              </div>
                           </div>
                           <div class="homepost-box-wraper">
                              <h4 class="post-title"><a href="blog_detail.html">5 Quick Tips Regarding Fashion</a></h4>
                              <p class="post-text">Redug Lagre dolor sit amet, consectetur adipisicing elit. Minima in nostrum, veniam. Esse est assumenda inventore.</p>
                              <p class="post-more"><a href="blog_detail.html">Read More...</a></p>
                              <p class="postmeta">
                                 <span class="post-author">
                                 <i class="fa fa-user"></i>
                                 By <a href="#">Admin</a>
                                 </span>
                                 <span class="post-comment">
                                 <i class="fa fa-comments-o"></i>
                                 <a href="#">49 Comments</a>
                                 </span>                             
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- homepost -->
            <!-- homeabout -->
            <section id="homeabout" class="section-padding homeabout parallex-image" data-background-img="img/bg/bg_1.jpg" data-bg-position="center center">
               <div class="container">
                  <div class="row">
                     <div class="col-md-8 col-lg-7">
                        <div class="homeabout-wrapper p-40 text-center bg-white">
                           <div class="homeabout-image">
                              <img src="img/logo.png" alt="" />
                           </div>
                           <h6 class="homeabout-title">We design for the future- in ways that make sens right now.</h6>
                           <p class="x-large"><span class="color">Many desktop publishing packages </span>and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                           <a class="btn btn-sm btn-color" href="#">Shop Now</a>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- homeabout -->
            <!-- homelogo -->
            <section id="homelogo" class="section-padding homelogo">
               <div class="container">
                  <!-- heading -->
                  <div class="section-heading text-center">
                     <h2>Our Partner</h2>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                  </div>
                  <!-- heading -->
                  <ul class="list-none-ib logo-carousel-6 owl-carousel owl-theme theme-carousel">
                     <li class="logo-item"><a href="#"><img src="img/logo/logo1.png" alt="bapor" /></a></li>
                     <li class="logo-item"><a href="#"><img src="img/logo/logo2.png" alt="bapor" /></a></li>
                     <li class="logo-item"><a href="#"><img src="img/logo/logo3.png" alt="bapor" /></a></li>
                     <li class="logo-item"><a href="#"><img src="img/logo/logo4.png" alt="bapor" /></a></li>
                     <li class="logo-item"><a href="#"><img src="img/logo/logo5.png" alt="bapor" /></a></li>
                     <li class="logo-item"><a href="#"><img src="img/logo/logo1.png" alt="bapor" /></a></li>
                     <li class="logo-item"><a href="#"><img src="img/logo/logo2.png" alt="bapor" /></a></li>
                     <li class="logo-item"><a href="#"><img src="img/logo/logo3.png" alt="bapor" /></a></li>
                     <li class="logo-item"><a href="#"><img src="img/logo/logo4.png" alt="bapor" /></a></li>
                     <li class="logo-item"><a href="#"><img src="img/logo/logo5.png" alt="bapor" /></a></li>
                  </ul>
               </div>
            </section>
            <!-- homelogo -->
         </div>
         <!-- Page Wraper -->
         <?php include("footer.php") ?>
      </div>
      <!-- Wraper -->
      <!-- start jquery -->
      <script src="js/jquery.min.js"></script>
      <!-- jquery library js -->
      <script src="js/jquery-ui.js"></script>
      <!-- jquery ui js -->
      <script src="js/tether.min.js"></script>
      <!-- Bootstrap tooltips require Tether (Tether Js) -->
      <script src="js/bootstrap.min.js"></script>
      <!-- bootstrap js -->
      <script src="js/owl.carousel.min.js"></script>
      <!-- owl carousel js -->
      <script src="js/jquery.appear.js"></script>
      <!-- appear js -->
      <script src="js/jquery.countTo.js"></script>
      <!-- countTo js -->   
      <script src="js/jquery.cookie.js"></script>
      <!-- cookie js -->      
      <script src="js/custom.js"></script>
      <!-- custom js -->
      <!-- end jquery -->
   </body>

<!-- Mirrored from magicclubgroup.com/bapor/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Jan 2020 19:50:56 GMT -->
</html>

