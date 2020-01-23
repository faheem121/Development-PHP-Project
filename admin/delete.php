<?php 
include ("connection.php") ;
$id = $_GET['id'];


// delete from tablename where id = '$id'

$delete = "delete from products where product_id = '$id'";
		$query = mysqli_query($con,$delete);
		
	header("location:delete_edit.php");

?>