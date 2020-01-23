<?php 

include ("connection.php");

?>


<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from magicclubgroup.com/bapor/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Jan 2020 19:54:00 GMT -->
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
                           <li>Contact Us</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </section>
            <!-- Bread Crumb -->
            <!-- Content page wrapper -->
            <section class="content-page-wrapper pb-0">
               <div class="page-title-wrapper">
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="section-heading text-center">
                              <h2>Contact Us</h2>                           
                           </div>                             
                        </div>
                     </div>
                  </div>
               </div>               
               <div class="map-wrapper">
                  <div id="map" class="map"></div>
               </div>
               <div class="contact-bottom">
                  <div class="container-fluid">
                     <div class="row no-padding">
                        <div class="col-lg-6 col-sm-12 contact-inner contact-address dark-bg">
                           <h3>Get in Touch</h3>
                           <div class="contact-box">
                              <div class="contact-icon">
                                 <i class="fa fa-map-marker" aria-hidden="true"></i>
                              </div>
                              <div class="conatct-text">
                                 <h5>Address</h5>
                                 <p>1234 North Luke Lane, South Bend,IN 360001</p>
                              </div>
                           </div>
                           <div class="contact-box">
                              <div class="contact-icon">
                                 <i class="fa fa-phone" aria-hidden="true"></i>
                              </div>
                              <div class="conatct-text">
                                 <h5>Phone</h5>
                                 <p>+0123 456 789</p>
                                 <p> Mon-Fri 8:00 AM - 8:00 PM</p>
                              </div>
                           </div>
                           <div class="contact-box">
                              <div class="contact-icon">
                                 <i class="fa fa-envelope-o" aria-hidden="true"></i>
                              </div>
                              <div class="conatct-text">
                                 <h5>Email</h5>
                                 <p><a href="mailto:theme@gmail.com">theme@gmail.com</a></p>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 contact-inner">
                           <h3>Contact Us</h3>
                           <form  class="frmcontact" method="POST" novalidate="novalidate" >                            
                            <div class="row">
                                 <div class="col-md-12 text-center">
                                  
                                 <p class="successContent">
                                    <i class="fa fa-check right"></i>Thank you,Your message has been sent successfully.
                                 </p>
                                 <p class="errorContent">
                                    <i class="fa fa-exclamation-circle right"></i>Something Wrong, There was a Error in the form please check!
                                 </p>
                            </div>
                                <div class="col-md-6">
                                    <div class="form-input-wrapper form-center">
                                        <input class="input-md full-width"  type="text" name="name" placeholder="Your Name" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-input-wrapper form-center">
                                        <input class="input-md full-width"   name="email" type="email" placeholder="Email" required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-input-wrapper form-center">
                                        <input class="input-md full-width"  name="number" type="number"placeholder="Phone Number">
                                    </div>
                                </div>                                
                                <div class="col-md-12">
                                    <div class="form-input-wrapper form-center">
                                        <textarea class="full-width"  rows="7" name="message" cols="45"  placeholder="Your Message" required="" ></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                  <input type="submit" class="btn-contact-submit btn btn-md btn-color" name="submit" value="Submit">
                                   <!--  <button class="btn-contact-submit btn btn-md btn-color" type="submit" name="submit">Submit</button>                                    
                                </div> -->

                            </div>

                                  <?php  
                            if (isset($_POST['submit'])) {
                              $name=$_POST['name'];
                              $email=$_POST['email'];
                              $number=$_POST['number'];
                              $message=$_POST['message'];

                              $contact="INSERT INTO contact (name,email,phone_number,message) VALUES ('$name','$email','$number','$message')";
                              $connect = mysqli_query($con,$contact);
                              if($connect){
                                echo "<h3 color:lightgreen>your data has been sent</h3>";
                              }
                            }?>
                           </form>
                          

                        
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- Content page wrapper -->
         </div>
         <!-- Page Wraper -->
         <?php include("footer.php ") ?>
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
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCihn1ZnVnUIhiC2nTRHblOh9qk9Y-vWIU&amp;callback=initMap"></script>
      script>
      <!-- map api js -->
      <script src="js/map.js"></script>
      <!-- contact map js -->
      <script src="js/jquery.appear.js"></script>
      <!-- appear js -->
      <script src="js/jquery.countTo.js"></script>
      <!-- countTo js -->
      <script src="js/jquery.cookie.js"></script>
      <!-- cookie js --> 
      <script src="js/custom.js"></script>
      <!-- custom js -->
      <script src="js/jquery.validate.js"></script>
      <!-- custom js -->
      <script src="js/contact.js"></script>
      <!-- contact js -->
      <!-- end jquery -->
   </body>

<!-- Mirrored from magicclubgroup.com/bapor/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Jan 2020 19:54:05 GMT -->
</html>