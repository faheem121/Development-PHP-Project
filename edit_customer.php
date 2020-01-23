<?php include("connection.php") ?>
<!DOCTYPE html>
<html lang="en">
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
	<form action="" method="post">
	
	<table border="2px" cellspacing="0" cellpadding="10px" align="center">
		<tr>
			<td>FIRST NAME</td>
			<td>LAST NAME</td>
			<td>CUSTOMER EMAIL</td>
			<td>AGE</td>
			<td>PASSWORD</td>
			<td>UPDATE</td>
			

		</tr>
		<?php 
		if (isset($_SESSION['id'])) {
			$customer_id=$_SESSION['id'];
			$customer_sel="select * from customers where id='$customer_id'";
			$customer_con=mysqli_query($con,$customer_sel);
			$customer_data=mysqli_fetch_array($customer_con);
			$fname=$customer_data['fname'];
			$lname=$customer_data['lname'];
			$customer_mail=$customer_data['customer_mail'];
			$age=$customer_data['age'];
			$pass=$customer_data['customer_pass'];

		
	
		
		 ?>
		<tr>
			<td><input type="text" name="fname" value="<?= $fname?>"></td>
			<td><input type="text" name="lname" value="<?= $lname?>"></td>
			<td><input type="text" name="mail" value="<?= $customer_mail?>"></td>
			<td><input type="number" name="age" value="<?= $age?>"></td>
			<td><input type="text" name="pass" value="<?= $pass?>"></td>
			<td><input type="submit" name="submit" value="update profile"></td>
			


		</tr>
	<?php } 
?>
	</table>
	</form>


	<?php include("footer.php") ?>

	
</body>
</html>

<?php 
if (isset($_POST['submit'])) {

	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$mail=$_POST['mail'];
	$pass=$_POST['pass'];
	$age=$_POST['age'];

	$update="update customers set fname='$fname',lname='$lname',customer_mail='$mail',customer_pass='$pass',age='$age' where id='$customer_id'"; 
	$update_con=mysqli_query($con,$update);
	header("location:customer.php");
		
} ?>