<?php 
include ("connection.php") ;
$id = $_GET['id'];


// delete from tablename where id = '$id'

$delete = "delete from customers where id = '$id'";
		$query = mysqli_query($con,$delete);
		session_start();
		session_destroy();
	header("location:index.php");


?>