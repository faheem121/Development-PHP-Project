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
		<h1 align="center">EDIT/DELETE PRODUCT</h1>
<table border="2px" cellspacing="0" cellpadding="10px" align="center">
	<tr>
		<th>ID</th>
		<th>QTY</th>
		<th>BRAND ID</th>
		<th>PRICE</th>
		<th>CAT ID </th>
		<th>GENDER ID</th>
		<th>DESCRIPTION</th>
		<th>KEYWORDS</th>
		<th>DATE</th>
		<th>DELETE</th>
		<th>EDIT</th>

		



	</tr>
	<?php  

	$get_product="select * from products";
	$product_con= mysqli_query($con,$get_product);
	while ($product_data=mysqli_fetch_array($product_con)) {
	    $product_id=$product_data['product_id'];
	    $product_qty=$product_data['product_qty'];
	    $brand_id=$product_data['brand_id'];
	    $product_price=$product_data['product_price'];
	    $cat_id=$product_data['cat_id'];
	    $gender_id=$product_data['gender_id'];
	    $product_desc=$product_data['product_desc'];
	    $product_keywords=$product_data['product_keywords'];
	    $date=$product_data['date'];

	    $brand_sel="select * from brand where brand_id='$brand_id'";
	    $brand_con=mysqli_query($con,$brand_sel);
	    $brand_get=mysqli_fetch_array($brand_con);

	    $brand_name=$brand_get['brand_title'];

	    $cat_sel="select * from categories where cat_id='$cat_id'";
	    $cat_con=mysqli_query($con,$cat_sel);
	    $cat_get=mysqli_fetch_array($cat_con);

	    $cat_name=$cat_get['cat_title'];

	     $gender_sel="select * from gender where gender_id='$gender_id'";
	    $gender_con=mysqli_query($con,$gender_sel);
	    $gender_get=mysqli_fetch_array($gender_con);

	    $gender_name=$gender_get['gender_title'];

	


	?>
	<tr>
		<td><?= $product_id  ?></td>
		<td><?= $product_qty  ?></td>
		<td><?= $brand_name  ?></td>
		<td><?= $product_price  ?></td>
		<td><?= $cat_name  ?></td>
		<td><?= $gender_name  ?></td>
		<td><?= $product_desc  ?></td>
		<td><?= $product_keywords  ?></td>
		<td><?= $date  ?></td>
		<td><a href="delete.php?id=<?= $product_data['product_id']  ?>">DELETE</a></td>
		<td><a href="edit.php?id=<?=$product_data['product_id']?>">EDIT</a></td>


	</tr>
<?php } ?>
<tr>
			<td colspan="11" align="center"><a href="admin_pannel.php" style="text-decoration: none;text-align: center;"  >Back to Admin pannel</a></td>
		</tr>
</table>



</body>
</html>