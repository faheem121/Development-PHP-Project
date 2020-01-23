<?php  
ob_start();
include ("connection.php");





?>

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

		<h1 align="center">ORDER DETAILS</h1>
		<?php if (isset($_SESSION['id'])) {
	
$customer_id=$_SESSION['id']; ?>
<table border="2px" cellspacing="0" cellpadding="10px" align="center">
	<tr>
		
		<th>PRODUCT</th>
		<th>QTY</th>
		<th>AMOUNT</th>
		<th>INVOICE</th>
		<th>PAYMENT</th>
		<th>SIZE</th>
		<th>COLOR</th>
		<th>DATE</th>
		<th>STATUS</th>
		<th>MESSAGE</th>

		

		

	
		



	</tr>
	<?php  



	$get_order="select * from orders where customer_id='$customer_id'";
	$order_con= mysqli_query($con,$get_order);
	while ($order_data=mysqli_fetch_array($order_con)) {
	    
	    $product_id=$order_data['pro_id'];
	    $qty=$order_data['qty'];
	    $amount=$order_data['amount'];
	    $invoice=$order_data['invoice'];
	    $payment=$order_data['payment'];
	    $size=$order_data['size'];
	    $color=$order_data['color'];
	    $date=$order_data['date'];
	    $status=$order_data['status'];
	    $msg=$order_data['message'];



		$product_sel="select * from products where product_id='$product_id'";
	    $product_con=mysqli_query($con,$product_sel);
	    $product_get=mysqli_fetch_array($product_con);
	    $product=$product_get['product_title']



	    

	


	?>
	<tr>
		
		
		<td><?= $product  ?></td>
		<td><?= $qty  ?></td>
		<td><?= "$".$amount ?></td>
		
		<td><?= $invoice  ?></td>
		<td><?=$payment  ?></td>
		<td><?= $size  ?></td>
		<td><?= $color  ?></td>
		<td><?= $date  ?></td>
		<td><?= $status  ?></td>
		<td><?= $msg  ?></td>


		


		

	</tr>
<?php } ?>
<tr>
<td colspan="11" align="center"><a href="index.php" style="text-decoration: none;text-align: center;"  >Back to Home</a></td>
</tr>
</table>
<?php }

else{
	echo "<center><a href='index.php' style='text-decoration: none;text-align: center;font-size:22px;'>Back to Home</a><br><h1 color:'red';>you are not login please login your account</h1><center>";
}


 ?>



<?php include("footer.php") ?>



</body>
</html>

