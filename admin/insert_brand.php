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
	<h1 align="center">INSERT BRAND/CATEGORY</h1>
	<form action="" method="post">
	<table border="2px" cellspacing="0" cellpadding="10px" align="center">
		<tr>
			<th>INSERT YOUR BRAND</th>
			<th>INSERT YOUR CATEGORY</th>

		</tr>
		<tr>
			<td><input type="text" name="brand_name"></td>
			<td><input type="text" name="cat_name"></td>

		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="INSERT"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><a href="admin_pannel.php" style="text-decoration: none;text-align: center;"  >Back to Admin pannel</a></td>
		</tr>
	</table>
	</form>
</body>
</html>

<?php  

if (isset($_POST['submit'])) {
	$brand_name= $_POST['brand_name'];
	$cat_name= $_POST['cat_name'];

	$brand="INSERT INTO brand (brand_title) VALUES ('$brand_name')";
	$query = mysqli_query($con,$brand);

	$cat="INSERT INTO categories (cat_title) VALUES ('$cat_name')";
	$query = mysqli_query($con,$cat);
}

?>