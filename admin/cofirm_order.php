<?php  
include ("connection.php");

if (isset($_GET['id'])) {
	$order_id=$_GET['id'];
	$status= 'completed';


	

	$order_update="update orders set status='$status' where order_id='$order_id'";
	$conection=mysqli_query($con,$order_update);

		
}






?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="POST" style="margin-top: 300px; margin-left: 500px;">
<cente>

<input type="text" name="msg">
<input type="submit"  name="submit" value="SEND MESSAGE">	
</center>	

</form>
</body>
</html>
<?php  

if (isset($_POST['submit'])) {

	$msg=$_POST['msg'];
	$msg_inst="update orders set message='$msg' where order_id='$order_id' ";
	$msg_con=mysqli_query($con,$msg_inst);
	header("location:order.php");
	
}

?>