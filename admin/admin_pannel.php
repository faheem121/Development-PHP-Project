
<?php session_start();
include ("connection.php");
?>

<?php  
if (!isset($_SESSION['id'])) {

	header("location:login.php");
}

else{




?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	
<div>
	<img src="image/logo.png" style="width: 1320px; height: 200px;" alt="">
</div>
<?php  
if (isset($_SESSION['id'])) {
	$customer_id=$_SESSION['id'];
	$query="select * from customers where id='$customer_id'";
	$query_con=mysqli_query($con,$query);
	$query_data=mysqli_fetch_array($query_con);
	  $_SESSION['fname']=$query_data['fname'];
	    $_SESSION['lname']=$query_data['lname'];
	



?>
<h3>WELCOME : <?=  $_SESSION['fname'] ."&nbsp". $_SESSION['lname']  ?></h3>

<?php } ?>

<h1 style="color: red" align="center">Manage Content</h1>

<ul align="center">
	<a href="insert_products.php"><li>INSERT YOUR DATA</li></a>
	<a href="contactus.php"><li>CONTACT MESSAGE</li></a>
	<a href="insert_brand.php"><li>INSERT BRAND/CATEGORY</li></a>
	<a href="delete_edit.php"><li>DELETE/EDIT PRODUCT</li></a>
	<a href="order.php"><li>ORDER PRODUCT</li></a>
	



	<a href="Logout.php"><li style="color: red">LOGOUT</li></a>


	
</ul>

	
</body>
</html>
<?php } ?>