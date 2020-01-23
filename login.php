<?php  
ob_start();
include ("connection.php");


                       
?>



<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from magicclubgroup.com/bapor/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Jan 2020 19:51:37 GMT -->
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
                           <li>Login / Register</li>
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
                        <div class="section-heading text-center">
                           <h2>Login / Register</h2>                           
                        </div>                        
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 mb-sm-30">
                        <form class="frm-login-box frm-border" name="frm-login-box" action="" method="post">
                           <h4>Registered User</h4>
                           <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                           <div class="form-input-wrapper form-center">
                              <label class="left">
                              Email Address
                              <abbr class="form-required" title="required">*</abbr>
                              </label>
                              <input class="input-md full-width" name="user_email" title="User Email" value="" placeholder="User Email" type="email" required="" aria-required="true">
                           </div>
                           <div class="form-input-wrapper form-center">
                              <label class="left">
                              Password
                              <abbr class="form-required" title="required">*</abbr>
                              </label>
                              <input class="input-md full-width" name="user_pass" title="User Password" value="" placeholder="User Password" type="password" required="" aria-required="true">
                           </div>
                           <div class="form-input-wrapper">
                              <input name="login"  class="submit btn btn-md btn-black" value="Login" type="submit">
                           </div>
                        </form>
                        <?php  
                       if (isset($_POST['login'])) {
                           $user_email=$_POST['user_email'];
                           $user_pass=$_POST['user_pass'];
                           $sel="SELECT * FROM customers where customer_mail='$user_email'";
                           $conection= mysqli_query($con,$sel);
                           $data=mysqli_fetch_array($conection);
                           if ($user_pass==$data['customer_pass']) {
                              $_SESSION['id']=$data['id'];
                               $_SESSION['fname']=$data['fname'];
                               $_SESSION['lname']=$data['lname'];



                        
                           header("location:index.php");
                   
                           

                              
                           }

                           else{
                              echo 'your password or email is not correct';
                           }
                        }



                        ?>
                     </div>
                     <div class="col-md-6">
                        <form class="frm-register-box frm-border" name="frm-login-box" method="POST">
                           <h4>New User</h4>
                           <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                           
                           <div class="form-input-wrapper form-center">
                              <label class="left">
                              First Name
                              <abbr class="form-required" title="required">*</abbr>
                              </label>
                              <input class="input-md full-width" name="fname"  title="User Email" value="" placeholder="First Name" type="text" required="" aria-required="true">
                              
                           </div>

                           <div class="form-input-wrapper form-center">
                              <label class="left">
                              Last Name
                              <abbr class="form-required" title="required">*</abbr>
                              </label>
                              <input class="input-md full-width" name="lname"  title="User Email" value="" placeholder="Last Name" type="text" required="" aria-required="true">
                              
                           </div>

                           <div class="form-input-wrapper form-center">
                              <label class="left">
                              User email
                              <abbr class="form-required" title="required">*</abbr>
                              </label>
                              <input class="input-md full-width" name="mail"  placeholder="User Email" type="email" required="" aria-required="true">
                              
                           </div>

                           <div class="form-input-wrapper form-center">
                              <label class="left">
                              Password
                              <abbr class="form-required" title="required">*</abbr>
                              </label>
                              <input class="input-md full-width" name="pass"  title="User Email" value="" placeholder="User password" type="password" required="" aria-required="true">
                             
                           </div>

                           <div class="form-input-wrapper form-center">
                              <label class="left">
                              Age
                              <abbr class="form-required" title="required">*</abbr>
                              </label>
                              <input class="input-md full-width" name="age"  title="User Email" value="" placeholder="please write " type="number" required="" aria-required="true">
                              
                           </div>

                           <div class="form-input-wrapper">
                              <input type="submit" name="submit" class="submit btn btn-md btn-color" value="Create An Account">
                           </div>
                        </form>

                        <?php  

                        if (isset($_POST['submit'])) {

                        $fname= $_POST['fname'];
                        $lname= $_POST['lname'];
                        $mail= $_POST['mail'];
                        $pass= $_POST['pass'];
                        $age = $_POST['age'];

                     $insert= "INSERT INTO customers (fname,lname,customer_mail,customer_pass,age) VALUES ('$fname','$lname','$mail','$pass','$age') ";
                     $run= mysqli_query($con,$insert);

                     if ($run) {

                        echo 'Data Sucessfuly Submitted';
                        
                     }



                           
                        }

                        ?>
    




                     </div>
                  </div>
               </div>
            </section>
            <!-- Content page wrapper -->
         </div>
         <!-- Page Wraper -->
         <!-- footer -->
        <?php include ("footer.php") ?>
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

<!-- Mirrored from magicclubgroup.com/bapor/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Jan 2020 19:51:37 GMT -->
</html>