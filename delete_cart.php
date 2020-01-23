<?php 
include ("connection.php") ;
$id = $_GET['cart_id'];


// delete from tablename where id = '$id'

$delete = "delete from cart where cart_id='$id'";
		$query = mysqli_query($con,$delete);
		
	header("location:index.php");

?>