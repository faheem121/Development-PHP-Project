<?php  


include("connection.php");

?>


<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from magicclubgroup.com/bapor/product_detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Jan 2020 19:54:05 GMT -->
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
      <link href="css/slick.css" rel="stylesheet" type="text/css" />
      <!-- slick css -->      
      <link href="css/style.css" rel="stylesheet" type="text/css" />
      <!-- style css -->
      <link href="js/photoswipe/photoswipe.css" rel="stylesheet" type="text/css" />      
      <!-- photoswipe css -->
      <link href="js/photoswipe/default-skin/default-skin.css" rel="stylesheet" type="text/css" />      
      <!-- photoswipe css -->
      <!-- end css -->
   </head>
   <body>
      <?php include ("header.php") ?>
         <!-- Header -->
         <!-- Page Wraper -->
         <?php 

         if (isset($_GET['pro_id'])) {


            $product_id=$_GET['pro_id'];

            $product_sel="select * from products where product_id='$product_id'";
            $product_con= mysqli_query($con,$product_sel);
            $product_array=mysqli_fetch_array($product_con);

            $product_title=$product_array['product_title']; 
            $product_image1=$product_array['img1'];
            $product_image2=$product_array['img2'];
            $product_price=$product_array['product_price']; 
            $product_desc=$product_array['product_desc'];
            $gender_id=$product_array['gender_id'];
            $brand_id=$product_array['brand_id'];
            $product_keyword=$product_array['product_keywords'];


            $brand_sel="select * from brand where brand_id='$brand_id'";
            $brand_con= mysqli_query($con,$brand_sel);
            $brand_array=mysqli_fetch_array($brand_con);
            $brand_title=$brand_array['brand_title'];

            $gender_sel="select * from gender where gender_id='$gender_id'";
            $gender_con= mysqli_query($con,$gender_sel);
            $gender_array=mysqli_fetch_array($gender_con);
            $gender_title=$gender_array['gender_title'];










             
          } 



         ?>
         <div class="page-wraper">
            <!--  Bread Crumb -->
            <section class="breadcrumb">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <ul class="breadcrumb-link">
                           <li><a href="index-2.php">Home</a></li>
                           <li><a href="shop.php">Men</a></li>
                           <li><?= $product_title ?></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </section>
            <!-- Bread Crumb -->
            <!-- Content page wrapper -->
            <section class="content-page-wrapper signle-product-wrapper">
               <!-- Product Detail -->
               <div class="product-detail container">
                  <div class="row">
                     <!-- Product Image -->
                     <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                        <div class="product-detail-image">
                           <div class="product-detail-slider product-image-gallery" id="product-image-gallery" data-pswp-uid="3">
                              <div class="item">
                                 <a class="product-gallery-item" href="admin/upload_images/<?= $product_image1 ?>" data-size="" data-med="admin/upload_images/<?= $product_image1 ?>" data-med-size="">
                                 <img src="admin/upload_images/<?= $product_image1 ?>" alt="image 1" />
                                 </a>
                              </div>
                              <div class="item">
                                 <a class="product-gallery-item" href="admin/upload_images/<?= $product_image2 ?>" data-size="" data-med="admin/upload_images/<?= $product_image2 ?>" data-med-size="">
                                 <img src="admin/upload_images/<?= $product_image2 ?>" alt="image 1" />
                                 </a>
                              </div>
                              
                           </div>
                           <a href="javascript:void(0)" id="zoom-images-button" class="zoom-images-button"><i class="fa fa-expand" aria-hidden="true"></i></a>
                        </div>
                        <!-- Slick Thumb Slider -->
                        <div class="product-detail-thumbnails">
                           <div class="item">
                              <img src="admin/upload_images/<?= $product_image1 ?>" alt="image 1" />
                           </div>
                           <div class="item">
                              <img src="admin/upload_images/<?= $product_image2 ?>" alt="image 1" />
                           </div>
                           
                        </div>
                        <!-- End Slick Thumb Slider -->                       
                     </div>
                     <!-- Product Image -->
                     <!-- Product Content -->
                     <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                        <div class="product-detail-content">
                           <h2 class="product-title"><?= $product_title ?></h2>
                           <div class="product-rating">
                              <ul class="star-rating">
                                 <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                 <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                 <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                 <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                 <li><i class="fa fa-star" aria-hidden="true"></i></li>
                              </ul>
                              <a href="#" class="product-rating-count"><span class="count">2</span> Reviews</a>
                           </div>
                           <div class="product-price">
                              <del>$99.00</del><span><span class="product-price-text color"><?= "$".$product_price ?></span></span>
                           </div>
                           <p class="product-short-description">
                             <?= $product_desc ?>
                           </p>
                           <form action="" method="post">
                           <div class="product-detail-filters">
                              <div class="filters-color">
                                 <label>Color</label>
                                 <div class="color-box-wrapper">
                                    <div class="color-box active red-box"><input type="radio" name="color" value="red"></div>
                                    <div class="color-box black-box"><input type="radio" name="color" value="black"></div>
                                    <div class="color-box yellow-box"><input type="radio" name="color" value="yellow"></div>
                                    <div class="color-box blue-box"><input type="radio" name="color" value="blue"></div>
                                 </div>
                              </div>
                              <div class="filters-size">
                                 <label>Size</label>                                       
                                 <div class="size-box-wrapper">
                                    <div class="size-box active"><input type="radio" name="size" value="S" >S</div>
                                    <div class="size-box"><input type="radio" name="size" value="M" >M</div>
                                    <div class="size-box"><input type="radio" name="size" value="L">L</div>
                                    <div class="size-box"><input type="radio" name="size" value="X" >X</div>
                                    <div class="size-box"><input type="radio" name="size" value="XL">XL</div>
                                 </div>
                              </div>
                           </div>
                           
                           <div class="signle-product-qty-wrapper">
                              <div class="product-qty">                                 
                                 <input class="qty input-lg" step="1" min="1" max="20" name="qty" value="1" title="Quantity" type="number" />
                                 <span data-value="-" class="qty-btn qtyminus-btn"></span>
                                 <span data-value="+" class="qty-btn qtyplus-btn"></span>                                 
                              </div>

                              <button type="submit" name="submit" class="btn btn-lg btn-black">Add to cart</button>
                           </div>
                          
                           <div class="signle-product-button-wrapper">
                              <a class="single-wishlist-btn" href="#"><i class="fa fa-heart right" aria-hidden="true"></i><span>Add to Wishlist</span></a>
                              <a class="single-compare-btn" href="#"><i class="fa fa-refresh right" aria-hidden="true"></i><span>Add to Compare</span></a>
                           </div>
                            </form>
                           <div class="signle-product-meta">
                              
                              <span>Category : <span class="category"><?= $brand_title.",".$gender_title ?></span></span>
                              <span>Tag : <span class="tag"><?= $product_keyword ?></span></span>
                           </div>
                           <div class="signle-product-share">
                              <span>Share :</span>
                              <ul>
                                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                 <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                 <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <!-- Product Content -->
                  </div>
               </div>
               <!-- Product Detail -->
               <!-- Product Tab -->
               <div class="product-tabs-wrapper container">
                  <ul class="product-tabs-title nav nav-tabs" role="tablist">
                     <li class="nav-item">
                        <a class="active" href="#tab_description" role="tab" data-toggle="tab">Description</a>
                     </li>
                     <li class="nav-item">
                        <a class="" href="#tab_information" role="tab" data-toggle="tab">Additional Information</a>
                     </li>
                     <li class="nav-item">
                        <a class="" href="#tab_reviews" role="tab" data-toggle="tab">Reviews (<span>2</span>)</a>
                     </li>
                     <li class="nav-item">
                        <a class="" href="#tab_custom" role="tab" data-toggle="tab">Custom Tab</a>
                     </li>
                  </ul>
                  <div class="product-tab-data tab-data container">
                     <div id="tab_description" role="tabpanel" class="tab-pane fade in active">
                        <!-- Accordian Title -->
                        <h6 class="product-mobile-title" data-toggle="collapse" data-target="#tab-description-data">Description</h6>
                        <!-- End Accordian Title -->
                        <!-- Accordian Content -->
                        <div id="tab-description-data" class="product_description product-collapse collapse container">
                           <div class="row">
                              <div class="col-md-6">
                                 <p>
                                    But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. 
                                 </p>
                                 <h4>1914 translation by H. Rackham</h4>
                                 <ul>
                                    <li>The standard Lorem Ipsum passage</li>
                                    <li>Excepteur sint occaecat cupidatat non proident</li>
                                    <li>There are many variations of passages of Lorem Ipsum available</li>
                                    <li>There is no minimum donation</li>
                                    <li>Excepteur sint occaecat cupidatat non proident</li>
                                 </ul>
                              </div>
                              <div class="col-md-6">
                                 <p>
                                    On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. 
                                 </p>
                                 <h4>Lorem Ipsum passage</h4>
                                 <h5>Used since the 1500s</h5>
                                 <h6>De Finibus Bonorum et Malorum</h6>
                              </div>
                           </div>
                        </div>
                        <!-- End Accordian Content -->
                     </div>
                     <div id="tab_information" role="tabpanel" class="tab-pane fade">
                        <!-- Accordian Title -->
                        <h6 class="product-mobile-title" data-toggle="collapse" data-target="#tab_information_data">Additional Information</h6>
                        <!-- End Accordian Title -->
                        <!-- Accordian Content -->
                        <div id="tab_information_data" class="container product-collapse collapse">
                           <table class="product_attributes">
                              <tbody>
                                 <tr>
                                    <th>Color</th>
                                    <td>Red, Black, Green</td>
                                 </tr>
                                 <tr>
                                    <th>Size</th>
                                    <td>L, M, XX</td>
                                 </tr>
                                 <tr>
                                    <th>Weight</th>
                                    <td>99 Gms</td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                        <!-- End Accordian Content -->
                     </div>
                     <div id="tab_reviews" role="tabpanel" class="tab-pane fade">
                        <!-- Accordian Title -->
                        <h6 class="product-mobile-title" data-toggle="collapse" data-target="#tab_reviews-coll">Reviews (0)</h6>
                        <!-- End Accordian Title -->
                        <!-- Accordian Content -->
                        <div id="tab_reviews-coll" class=" product-collapse collapse container">
                           <div class="row">
                              <div class="review-form-wrapper col-md-6">
                                 <h6 class="review-title">Add a Review </h6>
                                 <form class="comment-form">
                                    <div class="form-field-wrapper">
                                       <label>Your Rating</label>
                                       <p class="stars">
                                          <span>
                                          <a class="star-1" href="#">1</a>
                                          <a class="star-2" href="#">2</a>
                                          <a class="star-3 active" href="#">3</a>
                                          <a class="star-4" href="#">4</a>
                                          <a class="star-5" href="#">5</a>
                                          </span>
                                       </p>
                                    </div>
                                    <div class="form-field-wrapper">
                                       <label>Your Review <span class="required">*</span></label>
                                       <textarea id="comment" class="full-width" name="comment" cols="45" rows="8" required=""></textarea>
                                    </div>
                                    <div class="form-field-wrapper">
                                       <label>Name <span class="required">*</span></label>
                                       <input id="author" class="input-md full-width" name="author" value="" size="30" required="" type="text">
                                    </div>
                                    <div class="form-field-wrapper">
                                       <label>Email <span class="required">*</span></label>
                                       <input id="email" class="input-md full-width" name="email" value="" size="30" required="" type="email">
                                    </div>
                                    <div class="form-field-wrapper">
                                       <input name="submit" id="submit" class="submit btn btn-md btn-color" value="Submit" type="submit">
                                    </div>
                                 </form>
                              </div>
                              <div class="comments col-md-6">
                                 <h6 class="review-title">Customer Reviews</h6>
                                 <ul class="commentlist">
                                    <li class="comment-101">
                                       <img src="img/avatar.jpg" class="avatar" alt="author" />
                                       <div class="comment-text">
                                          <ul class="star-rating">
                                             <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                             <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                             <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                             <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                             <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                          </ul>
                                          <p class="meta">
                                             <strong>Jone Dean</strong>                  
                                             <span>March 01, 2018</span>
                                          </p>
                                          <div class="description">
                                             <p>There are now a set of mock banners available</p>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="comment-102">
                                       <img src="img/avatar.jpg" class="avatar" alt="author" />
                                       <div class="comment-text">
                                          <ul class="star-rating">
                                             <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                             <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                             <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                             <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                             <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                          </ul>
                                          <p class="meta">
                                             <strong>Jone Dean</strong>                   
                                             <span>April 12, 2017</span>
                                          </p>
                                          <div class="description">
                                             <p>Thank you for your support.</p>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="comment-103">
                                       <img src="img/avatar.jpg" class="avatar" alt="author" />
                                       <div class="comment-text">
                                          <ul class="star-rating">
                                             <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                             <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                             <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                             <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                             <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                          </ul>
                                          <p class="meta">
                                             <em>Your comment is awaiting approval</em>              
                                          </p>
                                          <div class="description">
                                             <p>Lorem Ipsum passage, used since the 1500s</p>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <!-- End Accordian Content -->
                     </div>
                     <div id="tab_custom" role="tabpanel" class="tab-pane fade">
                        <!-- Accordian Title -->
                        <h6 class="product-mobile-title" data-toggle="collapse" data-target="#tab_custom-coll">Custom Tab</h6>
                        <!-- End Accordian Title -->
                        <!-- Accordian Content -->
                        <div id="tab_custom-coll" class="product-collapse collapse container">
                           <div class="row">
                              <div class="col-md-4 mb-sm-30">
                                 <img src="img/blog/blog_02.jpg" alt="" />
                              </div>
                              <div class="col-md-8">
                                 <h3 class="normal"><span>The standard Lorem Ipsum passage, used since the 1500s</span></h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                 <a href="#" class="btn btn-sm btn-black mt-10">Read More</a>
                              </div>
                           </div>
                        </div>
                        <!-- End Accordian Content -->
                     </div>
                  </div>
               </div>
               <!-- Product Tab --> 
               <!-- featured collecations -->
               <section id="related-product" class="related-product">
                  <div class="container">
                     <div class="section-heading text-center">
                        <h2>Related Product</h2>
                     </div>
                     

                     <div class="carousel-item-4 owl-carousel owl-theme theme-carousel">
                     
                     <?php  

                     $rel_sel="select * products where gender_id='$gender_id'";
                     $rel_con =mysqli_query($con,$rel_sel);
                     while ($rel_data=mysqli_fetch_array($rel_con)) {
                        $img1=$rel_data['img1'];
                        $img2=$rel_data['img2'];
                        $p_title=$rel_data['product_title'];
                        $p_price=$rel_data['product_price'];


                         
                  


                     ?>
                        <!-- item -->
                        <div class="product-item">
                           <div class="product-item-wraper">
                              <div class="product-image-wraper">
                                 <a href="#"><img src="admin/upload_images/<?= $img1 ?>" alt="" data-src="admin/upload_images/<?= $img2 ?>" /></a>
                              </div>
                              <div class="product-item-button">
                                 <a href="#" data-toggle="tooltip" data-placement="left" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                 <a href="#" data-toggle="tooltip" data-placement="left" title="Add to Cart"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
                                 <a href="#" data-toggle="tooltip" data-placement="left" title="Add to Compare"><i class="fa fa-random" aria-hidden="true"></i></a>
                              </div>
                           </div>
                           <div class="product-item-detail">
                              <p class="product-title"><a href="#"><?= $p_title ?></a></p>
                              <h6 class="product-price color"><del>$99</del><?= $p_price ?></h6>
                           </div>
                        </div>
                                  <?php } ?>
                     </div>

                  </div>
               </section>
               <!-- featured collecations -->            
            </section>
            <!-- Content page wrapper -->
         </div>
         <!-- Page Wraper -->
        <?php include('footer.php') ?>
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
      <script src="js/slick.js"></script>
      <!-- slick js -->
      <script src="js/photoswipe/photoswipe.js"></script>
      <!-- photoswipe js --> 
      <script src="js/photoswipe/photoswipe-core.js"></script>
      <!-- photoswipe js --> 
      <script src="js/photoswipe/photoswipe-ui-default.js"></script>
      <!-- photoswipe js --> 
      <script src="js/jquery.appear.js"></script>
      <!-- appear js -->
      <script src="js/jquery.countTo.js"></script>
      <!-- countTo js --> 
      <script src="js/jquery.cookie.js"></script>
      <!-- cookie js -->       
      <script src="js/custom.js"></script>
      <!-- custom js -->
      <script src="js/product_slider.js"></script>
      <!-- custom js -->
      <!-- end jquery -->
   </body>

<!-- Mirrored from magicclubgroup.com/bapor/product_detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Jan 2020 19:54:12 GMT -->
</html>

<?php  

if (isset($_POST['submit'])) {



   $color=$_POST['color'];
   $size=$_POST['size'];
   $qty=$_POST['qty'];

   $insert_cart= "insert into cart (pro_id,cart_color,cart_size,cart_qty) values ('$product_id','$color','$size','$qty')";
   $cart_con=mysqli_query($con,$insert_cart);
   if ($cart_con) {
      header("location:index.php");

      
   }


   
}





?>

