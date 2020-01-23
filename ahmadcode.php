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
         
         $get_cats="SELECT * FROM categories";
         $run_cats=mysqli_query($con, $get_cats);

         while ($row_cats=mysqli_fetch_assoc($run_cats)) {

         $cat_id=$row_cats['cat_id'];
         $cat_title=$row_cats['cat_title'];

         ?>            
                     <li class="nav-item"><a class="nav-link" href="index.php?cat=<?php echo $cat_id; ?>"><?php echo $cat_title; ?></a></li>

                     <?php } ?> 
                     <!-- <li class="nav-item"><a class="nav-link" href="#men" role="tab" data-toggle="tab">Men</a></li>
                     <li class="nav-item"><a class="nav-link" href="#women" role="tab" data-toggle="tab">Kids</a></li> -->
                  </ul>

                 
                  <div class="tab-content">
                     <div class="row">
                                     <?php
               if (!isset($_GET['cat'])) {
                                                                  
               
               $get_products="SELECT * FROM products";
               $run_products=mysqli_query($con, $get_products);

               while ($row_products=mysqli_fetch_assoc($run_products)) {
                  
                  $p_title=$row_products['product_title'];
                  $p_img1=$row_products['product_image1'];
                  $p_img2=$row_products['product_image2'];
                  $p_price=$row_products['product_price'];

               ?>    <!-- Tab1 -->
               
                     <div id="footwear" class="tab-pane fade in active show" role="tabpanel">
                        <div id="footwear-product" class="carousel-item-4 owl-carousel owl-theme theme-carousel">
                           <!-- item -->

                           <div class="product-item">
                
                              
                              <div class="product-item-wraper">
                                
                                 <div class="product-image-wraper">
                                     
                                    <a href=""><img src="images/<?php echo $p_img1; ?>" alt="" data-src="images/<?php echo $p_img2; ?>" style="width:730px; height: 200px;" /></a>
                                 </div>
                                 <div class="product-item-button">
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to Cart"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
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
               if (isset($_GET['cat'])) {
                                                                  
               
               $cat_id=$_GET['cat'];

            $get_cat_pro= "SELECT * from products where cat_id='$cat_id'";
            $run_cat_pro= mysqli_query($con, $get_cat_pro);
             
            if (mysqli_num_rows($run_cat_pro)==0) {
               echo "<h2>No Products found in this Category!</h2>";
            }
            while ($row_cat_pro=mysqli_fetch_array($run_cat_pro)) {
               $p_id= $row_cat_pro['product_id'];
               $p_title= $row_cat_pro['product_title'];
               $p_cat= $row_cat_pro['cat_id'];
               $p_brand= $row_cat_pro['brand_id'];
               $p_desc= $row_cat_pro['product_desc'];
               $p_price= $row_cat_pro['product_price'];
               $p_image1= $row_cat_pro['product_image1'];
               $p_image2= $row_cat_pro['product_image2'];

               ?>    <!-- Tab1 -->
               
                     <div id="footwear" class="tab-pane fade in active show" role="tabpanel">
                        <div id="footwear-product" class="carousel-item-4 owl-carousel owl-theme theme-carousel">
                           <!-- item -->

                           <div class="product-item">
                
                              
                              <div class="product-item-wraper">
                                
                                 <div class="product-image-wraper">
                                     
                                    <a href=""><img src="images/<?php echo $p_image1; ?>" alt="" data-src="images/<?php echo $p_image2; ?>" style="width:730px; height: 200px; /></a>
                                 </div>
                                 <div class="product-item-button">
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to Cart"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
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