<?php  
include ("connection.php");
?>


<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from magicclubgroup.com/bapor/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Jan 2020 19:51:37 GMT -->
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
                           <li>Checkout</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </section>
            <!-- Bread Crumb -->
            <!-- Content page wrapper -->
            <section class="content-page-wrapper">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="checkout-page">
                           <div class="section-heading text-center">
                              <h2>Checkout</h2>                           
                           </div>                            
                           <p class="checkout-box">Returning customer? <strong><a href="login.php">Click Here to Login</a></strong></p>
                           <p class="checkout-box">Have a coupon?  <strong><a href="#">Enter Your Coupen Code</a></strong></p>
                           <form class="billing-detail mt-45" method="post">
                              <div class="row">
                                 <div class="col-md-6">
                                    <h3>Billing Address</h3>
                                    <div class="row">
                                       <div class="form-input-wrapper form-center col-sm-12">
                                          <label class="left">
                                          Full Name 
                                          <abbr class="form-required" title="required">*</abbr>
                                          </label>
                                          <input class="input-md full-width" name="full_name" title="First Name" value="" placeholder="First Name" type="text" required="" aria-required="true">
                                       </div>
                                      <div class="form-input-wrapper form-center col-sm-12">
                                          <label class="left">
                                          Country
                                          <abbr class="form-required" title="required">*</abbr>
                                          </label>
                                          <select name="country" id="billing-detail-billing-country" class="input-md full-width" autocomplete="country" tabindex="-1" aria-hidden="true" required="">
                                             <option value=""> -- Select a country -- </option>
                                             <option value="Afghanistan">Afghanistan</option>
                                             <option value="Argentina">Argentina</option>
                                             <option value="Belgium">Belgium</option>
                                             <option value="Cuba">Cuba</option>
                                             <option value="Brazil">Brazil</option>
                                             <option value="Canada">Canada</option>
                                             <option value="Pakistan" selected="selected">Pakistan</option>
                                             <option value="Egypt">Egypt</option>
                                             <option value="India">India</option>
                                             <option value="Japan">Japan</option>
                                             <option value="UK" >United Kingdom</option>
                                             <option value="US">United States</option>
                                          </select>
                                       </div>
                                       <div class="form-input-wrapper form-center col-sm-12">
                                          <label class="left">
                                          Address
                                          <abbr class="form-required" title="required">*</abbr>
                                          </label>
                                          <input class="input-md full-width mb-20" name="address" title="Address" value="" placeholder="Address" type="text" required="" aria-required="true">
                                        
                                       </div>
                                       <div class="form-input-wrapper form-center col-sm-12">
                                          <label class="left">
                                          City
                                          <abbr class="form-required" title="required">*</abbr>
                                          </label>
                                          <input class="input-md full-width" name="city" title="City" value="" placeholder="City" type="text" required="" aria-required="true">
                                       </div>
                                       
                                       <div class="form-input-wrapper form-center col-sm-6">
                                          <label class="left">
                                          Phone 
                                          <abbr class="form-required" title="required">*</abbr>
                                          </label>
                                          <input class="input-md full-width" name="number" title="Phone" value="" placeholder="Phone" type="number" required="" aria-required="true">
                                       </div>
                                       <div class="form-input-wrapper form-center col-sm-6">
                                          <label class="left">
                                          Email 
                                          <abbr class="email" title="required">*</abbr>
                                          </label>
                                          <input class="input-md full-width" name="email" title="Email" value="" placeholder="Email" type="email" required="" aria-required="true">
                                       </div>
                                      <!--  <div class="form-field-wrapper form-center col-sm-12">
                                          <label class="left">
                                          <input id="createaccount" name="createaccount" value="1" type="checkbox" />
                                          <span>Create an account?</span></label>
                                       </div> -->
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="order-review">
                                       <h3>Order Review</h3>
                                       <div class="order-review-inner">
                                          <table class="responsive-table">

                                            
                                             <thead>
                                                <tr>
                                                   <th class="product-name">Product Name</th>
                                                   <th class="product-total">Total</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                 <?php  

                                    $total=0;
                                    $i=0;
                                     $cart_check="select * from cart";
                                     $total_check=mysqli_query($con,$cart_check);
                                  while ($cart_data=mysqli_fetch_array($total_check)) {

                                  $cart_qty = $cart_data['cart_qty'];
                                  $cart_id = $cart_data['cart_id'];

                                  $cart_pro_id =$cart_data['pro_id'];
                                  $cart_color=$cart_data['cart_color'];
                                  $cart_size=$cart_data['cart_size'];


                                 $cart_product= "select * from products where product_id='$cart_pro_id'";
                                 $cart_pro=mysqli_query($con,$cart_product);
                                  $product_data=mysqli_fetch_array($cart_pro);
                                 $product_title=$product_data['product_title'];
                                 $product_qty=$product_data['product_qty'];

                               
                               $product_price1=$product_data['product_price'];
                             
                               $product_price= array($product_data['product_price']);
                              $values=array_sum($product_price);
                              $cart_mul=$values * $cart_qty;

                              $total +=$cart_mul;

                              $i++;

                               if (isset($_POST['submit'])) {

                                  $customer_id=$_SESSION['id'];

            $full_name=$_POST['full_name'];
            $country=$_POST['country'];
            $address=$_POST['address'];
            $city=$_POST['city'];
            $number=$_POST['number'];
            $email=$_POST['email'];
            $payment=$_POST['payment_method'];
            $invoice=mt_rand();
            $status='pending';



            $order_insert="insert into orders(customer_id,pro_id,f_name,qty,amount,country,address,city,phone,email,invoice,payment,size,color,status)
                           values ('$customer_id','$cart_pro_id','$full_name','$cart_qty','$cart_mul','$country','$address','$city','$number','$email','$invoice','$payment','$cart_size','$cart_color','$status')";
                     $order_run=mysqli_query($con,$order_insert);
                  
                  // if ($prduct_qty>=$cart_qty) {

                  //    $product_total=$product_qty-$cart_qty;

                  //    $total_qty= "update products set product_qty='$product_total'";
                  //    $total_con=mysqli_query($con,$total_qty);
                     
                  // }

                  // else{
                  //    echo 'this product is out of stock';
                  // }

                  if ($order_run) {
                  
                     $cart_delete="delete from cart ";

            $delete_con=mysqli_query($con,$cart_delete);
             header("location:index.php");

          
                     
                  }
            


            
         }




                                    ?>

                                                <tr class="cart-product">
                                                   <td class="product-name"><?= $product_title?> <br><strong>x <?=$cart_qty?></strong></td>
                                                   <td class="product-total"><?= "$".$cart_mul?></td>
                                                </tr>
                                                <?php } ?>
                                             </tbody>
                                             <tfoot>
                                               
                                                <tr class="product-total">
                                                   <th>Total</th>
                                                   <td><?= "$".$total?></td>
                                                </tr>
                                             </tfoot>
                                          
                                          </table>
                                       </div>
                                       <div class="product-checkout-payment">
                                          <ul>
                                             <li>
                                                <input name="payment_method" value="Direct Bank Transfer" checked="checked" type="radio" />
                                                <label>Direct Bank Transfer</label>
                                                <div class="payment-box payment-method-desc">
                                                   <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won't be shipped until the funds have cleared in our account.</p>
                                                </div>
                                             </li>
                                             <li>
                                                <input name="payment_method" value="Cash on Delivery" type="radio" />
                                                <label>Cash on Delivery</label>
                                             </li>
                                             <li>
                                                <input name="payment_method" value="cheque" type="radio" />
                                                <label>Cheque payments</label>
                                             </li>
                                          </ul>

                                          <div class="checkout-place-order">
                                             <?php if(!isset($_SESSION['id'])) {

                                             echo "<a class='btn btn-lg btn-color full-width' href='login.php'>First you have to login or create account</a>";
                                             
                                          } ?>
                                          <?php 
                                          if(isset($_SESSION['id'])) {
                                            

                                           ?>
                                            
                                             <input type="submit" class="btn btn-lg btn-color full-width" name="submit" value="Complete Order">
                                          <?php } ?>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </form>
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

<!-- Mirrored from magicclubgroup.com/bapor/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Jan 2020 19:51:37 GMT -->
</html>