<?php  
include ("connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div><h1 align="center">CUSTOMERS MESSAGE</h1></div>

<table class="table" border="2px" >

  <thead class=" white-text" style="background: black;color: white;">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">E-MAIL</th>
      <th scope="col">PHONE NUMBER</th>
      <th scope="col">MESSAGE</th>
      <th scope="col">DATE</th>

    </tr>
  </thead>
  <?php  
  $get_data="SELECT * FROM contact";
  $conn=mysqli_query($con,$get_data);
  while ($data=mysqli_fetch_array($conn)) {
     

     $id= $data['id'];
  $name= $data['name'];
  $email= $data['email'];
  $number= $data['phone_number'];
  $message= $data['message'];
  $date = $data['date']; 
  

  









  ?>
  <tbody >
  	<tr>
  		<td><?= $id ?></td>
  		<td><?= $name ?></td>
  		<td><?= $email ?></td>
  		<td><?= $number ?></td>
  		<td><?= $message ?></td>
  		<td><?= $date ?></td>
  	</tr>
<?php } ?>
    <tr>

    	<td colspan="6" align="center"><a href="admin_pannel.php" style="text-decoration: none;text-align: center;"  >Back to Admin pannel</a></td>
    </tr>
  </tbody>
</table>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

	
