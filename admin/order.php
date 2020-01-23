<?php  

include ("connection.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
		<h1 align="center">ORDER DETAILS</h1>
<table border="2px" cellspacing="0" cellpadding="10px" align="center">
	<tr>
		<th>CUSTOMER ID</th>
		<th>PRODUCT ID</th>
		<th>CUSTOMER NAME</th>
		<th>QTY</th>
		<th>AMOUNT</th>
		<th>COUNTRY</th>
		<th>ADDRESS</th>
		<th>PHONE</th>
		<th>EMAIL</th>
		<th>INVOICE</th>
		<th>PAYMENT</th>
		<th>SIZE</th>
		<th>COLOR</th>
		<th>DATE</th>
		<th>STATUS</th>
		<th>CONFIRM ORDER</th>
		

		

	
		



	</tr>
	<?php  

	$get_order="select * from orders";
	$order_con= mysqli_query($con,$get_order);
	while ($order_data=mysqli_fetch_array($order_con)) {
	    $customer_id=$order_data['customer_id'];
	    $order_id=$order_data['order_id'];

	    $product_id=$order_data['pro_id'];
	    $customer_name=$order_data['f_name'];
	    $qty=$order_data['qty'];
	    $amount=$order_data['amount'];
	    $country=$order_data['country'];
	    $adres=$order_data['address'];
	    $phone=$order_data['phone'];
	    $email=$order_data['email'];
	    $invoice=$order_data['invoice'];
	    $payment=$order_data['payment'];
	    $size=$order_data['size'];
	    $color=$order_data['color'];
	    $date=$order_data['date'];
	    $status=$order_data['status'];






	    

	


	?>
	<tr>
		<td><?= $customer_id  ?></td>
		<td><?= $product_id  ?></td>
		<td><?= $customer_name  ?></td>
		<td><?= $qty  ?></td>
		<td><?= "$".$amount ?></td>
		<td><?= $country  ?></td>
		<td><?= $adres  ?></td>
		<td><?= $phone  ?></td>
		<td><?= $email  ?></td>
		<td><?= $invoice  ?></td>
		<td><?=$payment  ?></td>
		<td><?= $size  ?></td>
		<td><?= $color  ?></td>
		<td><?= $date  ?></td>
		<td><?= $status  ?></td>
		<td><a href="cofirm_order.php?id=<?= $order_id ?>"style="text-decoration: none;">CONFIRM</a></td>
		
		


		

	</tr>
<?php } ?>
<tr>
			<td colspan="16" align="center"><a href="admin_pannel.php" style="text-decoration: none;text-align: center;"  >Back to Admin pannel</a></td>
		</tr>
</table>



</body>
</html>