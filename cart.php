<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from magicclubgroup.com/bapor/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Jan 2020 19:51:37 GMT -->
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
     <?php include("header.php") ?>
         <!-- Page Wraper -->
         <div class="page-wraper">
            <!--  Bread Crumb -->
            <section class="breadcrumb">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <ul class="breadcrumb-link">
                           <li><a href="index.php">Home</a></li>
                           <li>Shopping Cart</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </section>
            <!-- Bread Crumb -->
            <!-- Content page wrapper -->
            <section class="content-page-wrapper content-cart-page">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="cart-page">
                           <div class="section-heading text-center">
                              <h2>Shopping Cart</h2>                           
                           </div>                            
                           <form name="frm-cart-page" method="post" >
                              <div class="cart-page-table-wrapper responsive-table">
                                 <table>
                                    <thead>
                                       <tr>
                                          <th class="product-thumbnail">Image</th>
                                          <th class="product-name">Product Name</th>
                                          <th class="product-description">Description</th>
                                          <th class="product-price">Price</th>
                                          <th class="product-qty">Quantity</th>
                                          <th class="product-total">Total</th>
                                          <th class="product-remove"></th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                    <?php  

                                 if (isset($_POST['update_cart'])) {
                                    $qty=$_POST['qty'];
                                    $id_cart=$_POST['cart_id'];

                                    $update_qty="update cart set cart_qty='$qty' where cart_id='$id_cart'";
                                     $update_con= mysqli_query($con,$update_qty);
                                    ?>
                                    <tr>
                                          <?php  

                                    $total=0;
                                    $i=0;
                                     $cart_total="select * from cart";
                                     $total_conect=mysqli_query($con,$cart_total);
                                  while ($cart_data=mysqli_fetch_array($total_conect)) {

                                  $cart_qty = $cart_data['cart_qty'];
                                  $cart_id = $cart_data['cart_id'];

                                  $cart_pro_id =$cart_data['pro_id'];
                                  $cart_color=$cart_data['cart_color'];
                                  $cart_size=$cart_data['cart_size'];


                                 $cart_product= "select * from products where product_id='$cart_pro_id'";
                                 $cart_pro=mysqli_query($con,$cart_product);
                                  $product_data=mysqli_fetch_array($cart_pro);
                                 $product_title=$product_data['product_title'];
                               $product_image=$product_data['img1'];
                               $product_price1=$product_data['product_price'];
                             
                               $product_price= array($product_data['product_price']);
                              $values=array_sum($product_price);
                              $cart_mul=$values * $cart_qty;

                              $total +=$cart_mul;

                              $i++;

                                    ?>
                                          <td class="product-thumbnail">
                                             <a href="product_detail.php"><img src="admin/upload_images/<?= $product_image?>" style="width: 70px;height: 95px;" alt="" /></a>
                                          </td>
                                          <td class="product-name">
                                             <a href="product_detail.html"><?= $product_title?></a>
                                          </td>
                                          <td class="product-description">color : <?=$cart_color?> <br>  Size : <?=$cart_size?></td>
                                          <td class="product-price">
                                             <span><?= "$".$product_price1?></span>
                                          </td>
                                      
                                          <td class="product-qty">
                                             <div class="product-qty-block">
                                                <input class="qty input-lg" step="1" min="1" max="20" name="qty" value="<?= $cart_qty ?>" title="Quantity" type="number" />
                                                <span data-value="-" class="qty-btn qtyminus-btn"></span>
                                                <span data-value="+" class="qty-btn qtyplus-btn"></span>               
                                             </div>
                                             <input type="hidden" name="cart_id" value="<?= $cart_data['cart_id'] ?>">
                                          </td>
                                          <td class="product-total"><span><?= "$".$cart_mul?></span></td>
                                          <td class="product-remove"><a href="delete_cart.php?cart_id=<?= $cart_id  ?>">Remove</a></td>
                                       </tr>
                                        <?php } ?>
                                    <?php 

                                    
                                 }else{
?>
<tr>
                                          <?php  

                                    $total=0;
                                    $i=0;
                                     $cart_total="select * from cart";
                                     $total_conect=mysqli_query($con,$cart_total);
                                  while ($cart_data=mysqli_fetch_array($total_conect)) {

                                  $cart_qty = $cart_data['cart_qty'];
                                  $cart_id = $cart_data['cart_id'];

                                  $cart_pro_id =$cart_data['pro_id'];
                                  $cart_color=$cart_data['cart_color'];
                                  $cart_size=$cart_data['cart_size'];


                                 $cart_product= "select * from products where product_id='$cart_pro_id'";
                                 $cart_pro=mysqli_query($con,$cart_product);
                                  $product_data=mysqli_fetch_array($cart_pro);
                                 $product_title=$product_data['product_title'];
                               $product_image=$product_data['img1'];
                               $product_price1=$product_data['product_price'];
                             
                               $product_price= array($product_data['product_price']);
                              $values=array_sum($product_price);
                              $cart_mul=$values * $cart_qty;

                              $total +=$cart_mul;

                              $i++;

                                    ?>
                                          <td class="product-thumbnail">
                                             <a href="product_detail.php"><img src="admin/upload_images/<?= $product_image?>" style="width: 70px;height: 95px;" alt="" /></a>
                                          </td>
                                          <td class="product-name">
                                             <a href="product_detail.html"><?= $product_title?></a>
                                          </td>
                                          <td class="product-description">color : <?=$cart_color?> <br>  Size : <?=$cart_size?></td>
                                          <td class="product-price">
                                             <span><?= "$".$product_price1?></span>
                                          </td>
                                      
                                          <td class="product-qty">
                                             <div class="product-qty-block">
                                                <input class="qty input-lg" step="1" min="1" max="20" name="qty" value="<?= $cart_qty ?>" title="Quantity" type="number" />
                                                <span data-value="-" class="qty-btn qtyminus-btn"></span>
                                                <span data-value="+" class="qty-btn qtyplus-btn"></span>               
                                             </div>
                                             <input type="hidden" name="cart_id" value="<?= $cart_data['cart_id'] ?>">
                                          </td>
                                          <td class="product-total"><span><?= "$".$cart_mul?></span></td>
                                          <td class="product-remove"><a href="delete_cart.php?cart_id=<?= $cart_id  ?>">Remove</a></td>
                                       </tr>
                                        <?php } ?>
                                        <?php
                                 }

                                 ?>
                                       
                                    </tbody>
                                 </table>

                              </div>
                              <!-- cart actions -->
                              <div class="row cart-actions">
                                 <div class="col-md-9">
                                    <div class="coupon">
                                       <input class="input-md coupon_code" name="coupon_code" title="Coupon Code" placeholder="Coupon Code" type="text"  />                                       
                                       <button class="btn btn-md btn-black" name="coupon_code_btn" type="submit">Apply Coupon</button>
                                    </div>
                                 </div>
                                 <div class="col-md-3 update_cart_btn">
                                    <input class="btn btn-md btn-gray" name="update_cart" value="Update cart"  type="submit">
                                 </div>
                              </div>
                              <!-- cart actions -->
                           </form>

                           <!-- cart total -->
                           <div class="cart-totals">
                              <div class="cart-totals-inner">
                                 <h3>Cart totals</h3>
                                 <div class="cart-total-text">
                                    <table>
                                       <thead>
                                          
                                          <tr class="cart-order-total">
                                             <th>Total</th>
                                             <td><span class="product-pice"><?= "$".$total ?></span></td>
                                          </tr>
                                       </thead>
                                    </table>
                                 </div>
                                 <div class="cart-process-to-checkout">
                                    <a class="btn btn-lg btn-color full-width" href="checkout.php">Process to Checkout</a>
                                 </div>
                              </div>
                           </div>
                           <!-- cart total -->
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- Content page wrapper -->
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

<!-- Mirrored from magicclubgroup.com/bapor/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Jan 2020 19:51:37 GMT -->
</html>