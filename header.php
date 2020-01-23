<?php 
ob_start();
include("connection.php");
session_start();

?>


 <!-- Page Loader -->
  <!--     <div class="page-loader loader">
         <div class="loader-icon">
            <div class="loader-spinner">
               <div></div>
               <div></div>
               <div></div>
               <div></div>
               <div></div>
               <div></div>
               <div></div>
               <div></div>
               <div></div>
               <div></div>
               <div></div>
               <div></div>
            </div>
         </div>
      </div> -->
      <!-- END Page Loader -->
      <!-- Button to Open the Modal -->
	  <a href="#" class="newsletter-popup-btn" data-toggle="modal" data-target="#news-popup">Open Newsletter Popup</a>
	  <!-- Newsletter Popup -->
	  <div class="modal fade" id="news-popup">
	    <div class="newsletter-popup modal-dialog modal-dialog-centered modal-lg">
	      <div class="modal-content">
	        <button type="button" class="close newsletter-popup-close" data-dismiss="modal">&times;</button>
	        <!-- Modal body -->
	        <div class="modal-body">	          
	          <div class="container">
	          	<div class="row">
		          	<div class="col-md-6 col-sm-12 col-xs-12 hidden-sm-down newsletter-popup-image-wrapper">
		          		<div class="newsletter-image">
		          			<img src="img/news_popup.jpg" alt="" />
		          		</div>
		          	</div>
		          	<div class="col-md-6 col-sm-12 col-xs-12 newsletter-popup-content">
		          		<div class="newsletter-popup-content-wrappper">		          			
		          			<h3 class="title">Newsletter</h3>
		          			<p>Subscribe now and Receive Up to 50% Off</p>
		          			<form class="newsletter-popup-form">
	                           <input type="text" class="input-md" name="txt_footer_email" title="Enter Email Address.." placeholder="Enter Email Address.." required="" />
	                           <button class="btn btn-md btn-color">SignUp!</button>
	                        </form>
		          		</div>
		          	</div>
	          	</div>
	          </div>		          
	        </div>
	      </div>
	    </div>
	  </div>	
     <!-- End Newsletter Popup -->
      <!-- Sidebar Cart -->
      <div class="cart-sidebar">
         <div class="cart-sidebar-container">
            <!-- Cart Title -->
            <div class="cart-sidebar-heading">
               <h4>Shopping Cart</h4>
               <!-- Close Button -->
               <a href="javascript:void(0)" class="cart-sidebar-close"><i class="fa fa-times" aria-hidden="true"></i></a>
               <!-- End Close Button -->
            </div>
            <!-- End Cart Title -->
            <!-- Cart Product Content-->
            <div class="cart-sidebar-content">
               <div class="cart-sidebar-product">
                  <!-- empty -->
                  <div class="cart-sidebar-empty">
                     <p>You have no items in your shopping cart.</p>
                  </div>
                  <!-- End empty -->
                  <!-- Cart Products -->
                  
                     


                  <ul class="cart-product-item">

                     <?php  

                     $cart_select="select * from cart";
                     $cart_conect=mysqli_query($con,$cart_select);
                     $cart_count=mysqli_num_rows($cart_conect);
                     if ($cart_count==0) {

                        echo 'You have no items in your shopping cart.';
                        
                     }
                     while ($cart_data=mysqli_fetch_array($cart_conect)) {

                         $cart_qty = $cart_data['cart_qty'];
                         $cart_id = $cart_data['cart_id'];

                         $cart_pro_id =$cart_data['pro_id'];

                         $cart_product= "select * from products where product_id='$cart_pro_id'";
                         $cart_pro=mysqli_query($con,$cart_product);
                         $product_data=mysqli_fetch_array($cart_pro);
                         $product_title=$product_data['product_title'];
                         $product_image=$product_data['img1'];
                         $product_price=$product_data['product_price'];






                   
                     ?>
                     
                  
                     <li>
                        
                        <a href="#" class="product-image">
                        <img src="admin/upload_images/<?= $product_image ?>" style="width: 70px;height: 95px;" alt="" />                            
                        </a>
                        <!--Product Content-->
                        <div class="product-content">
                           <!-- Product Title -->
                           <a class="product-title" href="#"><?=$product_title?></a>
                           <!-- Product Price -->
                           <div class="cart-sidebar-qty">
                              <span><?= $cart_qty?></span>&nbsp;<span>&#215;</span>&nbsp;<span class="cart-sidebar-price"><?= "$".$product_price?></span>                                
                           </div>
                           <!-- Product Remove -->
                           <a class="product-remove" href="delete_cart.php?cart_id=<?= $cart_id?>"><i class="fa fa-times-circle" aria-hidden="true"></i></a>                            
                        </div>
                     </li>

                     <?php } ?>
                     
                    
                  </ul>
               

                  <!-- End Cart Products -->
               </div>
            </div>
            <!-- End Cart Product Content -->
            <!-- Cart Footer -->
            <div class="cart-sidebar-footer">
               <div class="cart-sidebar-inner">

                  <!-- Cart Total -->
                  <?php 
                  $total=0;
                  $i=0;
                $cart_total="select * from cart";
                     $total_conect=mysqli_query($con,$cart_total);
                     while ($cart_data=mysqli_fetch_array($total_conect)) {

                         $cart_qty = $cart_data['cart_qty'];
                         $cart_id = $cart_data['cart_id'];

                         $cart_pro_id =$cart_data['pro_id'];

                         $cart_product= "select * from products where product_id='$cart_pro_id'";
                         $cart_pro=mysqli_query($con,$cart_product);
                         $product_data=mysqli_fetch_array($cart_pro);
                         $product_title=$product_data['product_title'];
                         $product_image=$product_data['img1'];
                         $product_price=$product_data['product_price'];
                             
                         $product_price= array($product_data['product_price']);
                        $values=array_sum($product_price);
                        $cart_mul=$values * $cart_qty;

                         $total +=$cart_mul;

                         $i++;


}

                  ?>
                  <h4 class="cart-sidebar-total"><span>Total :</span><span class="cart-total"><?= "$".$total ?></span></h4>
               
                  <!-- Cart Total -->
                  <!-- Cart Buttons -->
                  <div class="cart-sidebar-actions">
                     <a href="cart.php" class="view-cart btn btn-md btn-black">View Cart</a>
                     <a href="checkout.php" class="checkout btn btn-md btn-color">Process To Checkout</a>
                  </div>
                  <!-- End Cart Buttons -->
               </div>
            </div>
            <!-- Cart Footer -->
         </div>
      </div>
      <!--Overlay-->
      <div class="cart-sidebar-overlay"></div>
      <!-- End Sidebar Cart -->
      <!-- Wraper -->
      <div class="wraper">
         <!-- Header -->
         <!-- header-fix for header fix -->
         <header class="header header-fix">
            <!--Topbar-->
            <!-- dark-bg for black background -->
            <div class="header-topbar">
               <div class="header-topbar-inner">
                  <!--Topbar Left-->
                  <div class="header-topbar-left hidden-sm-down">
                     <p class="helpcare">24x7 Help : <b>+0123-456-789</b></p>
                     <?php 



                     if (!isset($_SESSION['id'])) {
                         
                     
                     

                     echo "<p class='helpcare'>WELCOME:<b>AS GUEST</b></p>";
                      } 
                      else{


                     
                     
                        
                      echo "<p class='helpcare'>WELCOME:<b>".$_SESSION['fname'].'&nbsp'. $_SESSION['lname']."</b></p>";
                      }

                     ?>
                     <!-- <p class="helpcare">WELCOME : <b></b></p> -->
                  </div>
                  <!--End Topbar Left-->
                  <!--Topbar Right-->
                  <div class="header-topbar-right">
                     <ul class="list-none">
                      <li class="dropdown-navigation">
                           <a><i class="fa fa-user right" aria-hidden="true"></i><span class="hidden-sm-down">My Account</span><i class="fa fa-angle-down left" aria-hidden="true"></i></a>
                           <!--Dropdown-->
                           <div class="dropdown-menu">
                              <ul>
                                 <li><a href="customer.php">My Account</a></li>
                                 <?php  
                                 if (!isset($_SESSION['id'])) {
                                    
                                 
                                    echo " <li><a href='login.php'>SignUp</a></li>
                                 <li><a href='login.php'>Login</a></li>";

                                 }


                                 ?>
                                
                                 <li><a href="order_track.php">Track Orders</a></li>
                                 <li><a href="#">Gift Cards</a></li>
                                 <li><a href="logout.php">Logout</a></li>

                              </ul>
                           </div>
                           <!--End Dropdown-->
                        </li>
                        <!--Search-->
                        <li class="search-menu">
                           <a class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></a>
                           <!-- Search Popup -->
                           <div class="search-popup">
                              <!-- Search Form -->
                              <form name="searchform" class="searchform" method="get">
                                 <input name="txtsearch" class="input-md" type="text" placeholder="Search Here..." title="Search Here..." />
                                 <button class="search-popup-btn" type="submit">
                                 <i class="fa fa-search" aria-hidden="true"></i>
                                 </button>                                
                              </form>
                              <!-- End Search Form -->
                           </div>
                           <!-- End Search Popup -->
                        </li>
                        <!--Wishlist-->
                        <li><a><i class="fa fa-heart" aria-hidden="true"></i><span class="counttip">2</span></a></li>
                        <!--Cart-->
                        <li>
                           <a class="cart-sidebar-btn">
                              <div class="cart-icon">
                                 <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                              </div>
                              <div class="cart-item">
                                 <span class="cart-count"><?= $i ?></span>
                                 <span>/</span>
                                 <span class="cart-total"><?= "$".$total ?></span>
                              </div>
                           </a>
                        </li>
                     </ul>
                  </div>
                  <!-- End Topbar Right -->
               </div>
            </div>
            <!--Topbar-->
            <!--Header Main-->
            <!-- dark-bg for black background -->
            <div class="header-main">
               <div class="header-main-inner">
                  <!--logo-->
                  <div class="logo">
                     <a href="index.php"><img src="img/logo.png" alt="Bapor" /></a>                    
                  </div>
                  <!--logo-->
                  <!--Navigation Menu-->
                  <nav class="menu">
                     <ul>
                     <li><a href="index.php">Home</a></li>
                        <li class="has-sub normalmenu">
                           <a href="shop.php">Men</a>
                           <label class="new-label">New</label>
                           <!-- drop down menu -->
                           <ul class="dropdown">
                              <li><a href="#">Topwear</a></li>
                              <li><a href="#">Bottomwear</a></li>
                              <li><a href="#">Westernwear</a></li>
                              <li><a href="#">Sportswear</a></li>
                              <li class="has-sub normalmenu">
                                 <a href="#">Indianwear</a>
                                 <!-- Sub drop down menu -->
                                 <ul class="dropdown">
                                    <li><a href="#">Indianwear</a></li>
                                    <li><a href="#">Westernwear</a></li>
                                    <li><a href="#">Lingerie</a></li>
                                    <li><a href="#">Footwear</a></li>
                                    <li><a href="#">Sportswear</a></li>
                                    <li><a href="#">Beauty Care</a></li>
                                 </ul>
                                 <!-- Sub drop down menu -->
                              </li>
                              <li><a href="#">Innerwear</a></li>
                           </ul>
                           <!-- drop down menu -->
                        </li>
                        <li class="has-sub normalmenu">
                           <a href="shop.php">Women</a>                           
                           <!-- drop down menu -->
                           <ul class="dropdown">
                              <li><a href="#">Fusionwear</a></li>
                              <li><a href="#">Westernwear</a></li>
                              <li><a href="#">Lingerie</a></li>
                              <li><a href="#">Footwear</a></li>
                              <li><a href="#">Sportswear</a></li>
                              <li><a href="#">Beauty Care</a></li>
                           </ul>
                           <!-- drop down menu -->
                        </li>
                        <li class="has-sub megamenu">
                           <a href="shop.html">Fashion</a>
                           <ul class="megamenu-dropdown dropdown">
                              <li>
                                 <div class="megamenu-wrapper container">
                                    <div class="row">
                                       <div class="col-sm-3">
                                          <!-- Sub drop down menu -->
                                          <ul class="dropdown">
                                             <li class="title">New In Women</li>
                                             <li><a href="#">Indianwear</a></li>
                                             <li><a href="#">Westernwear</a></li>
                                             <li><a href="#">Lingerie</a></li>
                                             <li><a href="#">Footwear</a></li>
                                             <li><a href="#">Sportswear</a></li>
                                             <li><a href="#">Beauty Care</a></li>
                                             <li><a href="#">Lingerie</a></li>
                                             <li><a href="#">Footwear</a></li>
                                             <li><a href="#">Sportswear</a></li>
                                             <li><a href="#">Beauty Care</a></li>
                                          </ul>
                                          <!-- Sub drop down menu -->          
                                       </div>
                                       <div class="col-sm-3">
                                          <!-- Sub drop down menu -->
                                          <ul class="dropdown">
                                             <li class="title">New In Men</li>
                                             <li><a href="#">Indianwear</a></li>
                                             <li><a href="#">Westernwear</a></li>
                                             <li><a href="#">Lingerie</a></li>
                                             <li><a href="#">Footwear</a></li>
                                             <li><a href="#">Sportswear</a></li>
                                             <li><a href="#">Beauty Care</a></li>
                                             <li><a href="#">Lingerie</a></li>
                                             <li><a href="#">Footwear</a></li>
                                             <li><a href="#">Sportswear</a></li>
                                             <li><a href="#">Beauty Care</a></li>
                                          </ul>
                                          <!-- Sub drop down menu -->          
                                       </div>
                                       <div class="col-sm-3">
                                          <!-- Sub drop down menu -->
                                          <ul class="dropdown">
                                             <li class="title">New In Fashion</li>
                                             <li><a href="#">Indianwear</a></li>
                                             <li><a href="#">Westernwear</a></li>
                                             <li><a href="#">Lingerie</a></li>
                                             <li><a href="#">Footwear</a></li>
                                             <li><a href="#">Sportswear</a></li>
                                             <li><a href="#">Beauty Care</a></li>
                                             <li><a href="#">Lingerie</a></li>
                                             <li><a href="#">Footwear</a></li>
                                             <li><a href="#">Sportswear</a></li>
                                             <li><a href="#">Beauty Care</a></li>
                                          </ul>
                                          <!-- Sub drop down menu -->          
                                       </div>
                                       <div class="col-sm-3">                                          
                                          <div class="menu-banner promo-banner-wraper">
                                             <a href="#"><img src="img/banner/menu_banner.png" alt="" /></a>         
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </li>
                        <li class="has-sub megamenu">
                           <a href="shop.html">Kids</a>
                           <ul class="megamenu-dropdown dropdown">
                              <li>
                                 <div class="megamenu-wrapper container">
                                    <div class="row">
                                       <div class="col-sm-4">
                                          <!-- Sub drop down menu -->
                                          <ul class="dropdown">
                                             <li class="title">New In Women</li>
                                             <li><a href="#">Indianwear</a></li>
                                             <li><a href="#">Westernwear</a></li>
                                             <li><a href="#">Lingerie</a></li>
                                             <li><a href="#">Footwear</a></li>
                                             <li><a href="#">Sportswear</a></li>
                                             <li><a href="#">Beauty Care</a></li>         
                                          </ul>
                                          <!-- Sub drop down menu -->          
                                       </div>
                                       <div class="col-sm-4">
                                          <!-- Sub drop down menu -->
                                          <ul class="dropdown">
                                             <li class="title">New In Men</li>
                                             <li><a href="#">Indianwear</a></li>
                                             <li><a href="#">Westernwear</a></li>
                                             <li><a href="#">Lingerie</a></li>
                                             <li><a href="#">Footwear</a></li>
                                             <li><a href="#">Sportswear</a></li>
                                             <li><a href="#">Beauty Care</a></li>
                                          </ul>
                                          <!-- Sub drop down menu -->          
                                       </div>
                                       <div class="col-sm-4">
                                          <!-- Sub drop down menu -->
                                          <ul class="dropdown">
                                             <li class="title">New In Fashion</li>
                                             <li><a href="#">Indianwear</a></li>
                                             <li><a href="#">Westernwear</a></li>
                                             <li><a href="#">Lingerie</a></li>
                                             <li><a href="#">Footwear</a></li>
                                             <li><a href="#">Sportswear</a></li>
                                             <li><a href="#">Beauty Care</a></li>
                                          </ul>
                                          <!-- Sub drop down menu -->        
                                       </div>                                      
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a href="shop.php">Brand</a>
                           <label class="hot-label">Hot</label>
                        </li>
                        <li><a href="shop.php">Footwear</a></li>
                        <li><a href="portfolio.php">Portfolio</a></li>
                        <li class="has-sub normalmenu">
                           <a href="#">Pages</a>
                           <!-- drop down menu -->
                           <ul class="dropdown">
                              <li><a href="blog.php">Blog</a></li>
                              <li><a href="blog_sidebar.php">Blog with Sidebar</a></li>
                              <li><a href="shop_sidebar_right.php">Shop Right Sidebar</a></li>
                              <li><a href="shop_no_sidebar.php">Shop No Sidebar</a></li>
                              <li><a href="cart.php">Cart</a></li>
                              <li><a href="checkout.php">Checkout</a></li>
                              <li><a href="about.php">About Us</a></li>
                              <li><a href="contact.php">Contact Us</a></li>
                              
                           </ul>
                           <!-- drop down menu -->
                        </li>
                     </ul>
                  </nav>
                  <!--Navigation Menu-->
               </div>
            </div>
            <!--Header Main-->
         </header>
         <!-- Header -->