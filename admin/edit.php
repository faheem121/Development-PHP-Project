<?php  
ob_start();

Include ("connection.php");

if (isset($_GET['id'])) {
  	
   
$id= $_GET['id'];
$select_data="select * from products where product_id='$id'";
$select_query= mysqli_query($con,$select_data);
$data=mysqli_fetch_array($select_query);
$cat_id=$data['cat_id'];
$brand_id=$data['brand_id'];
$gender_id=$data['gender_id'];
$update_id=$data['product_id'];



$get_cat="select * from categories where cat_id='$cat_id'";
$run_cat= mysqli_query($con,$get_cat);
$cat_row=mysqli_fetch_array($run_cat);
$cat_edit_title = $cat_row['cat_title'];

$get_brand="select * from brand where brand_id='$brand_id'";
$run_brand= mysqli_query($con,$get_brand);
$brand_row=mysqli_fetch_array($run_brand);
$brand_edit_title = $brand_row['brand_title'];



$get_gender="select * from gender where gender_id='$gender_id'";
$run_gender= mysqli_query($con,$get_gender);
$gender_row=mysqli_fetch_array($run_gender);
$gender_edit_title = $gender_row['gender_title'];



} 



?>




<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<form class="form-horizontal" method="post">
<fieldset>


<!-- Form Name -->
<legend align="center" class="text-success" enctype="multipart/form-data">UPDATE YOUR PRODUCTS</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" >PRODUCT QUANTITY</label>  
  <div class="col-md-4">
  <input id="product_name" name="product_qty" placeholder="PRODUCT QUANTITY" class="form-control input-md" required type="number" value="<?php echo $data['product_qty'] ?>"  >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" >PRODUCT BRAND</label>
  <div class="col-md-4">
    <select  name="product_brand" class="form-control">
    <option selected required value="<?= $brand_id ?>"><?php echo $brand_edit_title; ?></option>
    <?php  

    $pro="select * from brand";
    $pro_con=mysqli_query($con,$pro);
    while ($pro_array=mysqli_fetch_array($pro_con)) {
        
        $pro_title=$pro_array['brand_title'];
        $pro_id=$pro_array['brand_id'];



        echo "<option value='$pro_id' >$pro_title</option>";
    }



    ?>
 

    </select>

  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_id">PRODUCT PRICE</label>  
  <div class="col-md-4">
  <input  name="product_price" placeholder="PRODUCT PRICE" class="form-control input-md" required type="number" value="<?= $data['product_price'] ?>">
    
  </div>
</div>



<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" >PRODUCT CATEGORY</label>
  <div class="col-md-4">
    <select  name="product_category" class="form-control">
      
      <option selected required value="<?= $cat_id ?>"><?php echo $cat_edit_title; ?></option>
    <?php  
    $cat="select * from categories";
    $cat_con=mysqli_query($con,$cat);
    while ($cat_array=mysqli_fetch_array($cat_con)) {
        
        $cat_title=$cat_array['cat_title'];
        $cat_id=$cat_array['cat_id'];



        echo "<option value='$cat_id' >$cat_title</option>";
    }



    ?>
 

    </select>


  </div>
</div>


<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" >SELECT FOR MALE/FRMALE/KIDS</label>
  <div class="col-md-4">
    <select  name="product_gender" class="form-control">
      
       <option selected required value="<?= $gender_id ?>"><?php echo $gender_edit_title; ?></option>
    <?php  
    $gen="select * from gender";
    $gen_con=mysqli_query($con,$gen);
    while ($gen_array=mysqli_fetch_array($gen_con)) {
        
        $gen_title=$gen_array['gender_title'];
        $gen_id=$gen_array['gender_id'];



        echo "<option value='$gen_id'>$gen_title</option>";
    }



    ?>


  

    </select>
  </div>
</div>









<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" >PRODUCT DESCRIPTION</label>
  <div class="col-md-4">                     
    <textarea class="form-control"  name="product_desc" required ><?php echo $data['product_desc']; ?></textarea>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" >PRODUCT KEYWORDS</label>  
  <div class="col-md-4">
  <input  name="product_keywords" placeholder="PRODUCT KEYWORDS" class="form-control input-md" required type="text" value="<?= $data['product_keywords'] ?>">
    
  </div>
</div>







    
 <!-- File Button --> 
<!-- <div class="form-group">
  <label class="col-md-4 control-label" >main_image</label>
  <div class="col-md-4">
    <input  name="image1" class="input-file" type="file">
  </div>
</div>
File Button 
<div class="form-group">
  <label class="col-md-4 control-label" >image1</label>
  <div class="col-md-4">
    <input  name="image2" class="input-file" type="file">
  </div>
</div>
 -->
<!-- Button -->
<div align="center">
  <input type="submit" class="btn btn-primary" name="update" value="Update product">
  <a href="admin_pannel.php" style="text-decoration: none;text-align: center;"  >Back to Admin pannel</a>


</div>

</fieldset>




<?php  
if (isset($_POST['update'])) {

  $product_qty=$_POST['product_qty'];
  $product_brand=$_POST['product_brand'];
  $product_price=$_POST['product_price'];
  $product_category=$_POST['product_category'];
  $product_gender=$_POST['product_gender'];
  $product_desc=$_POST['product_desc'];
  $product_keywords=$_POST['product_keywords'];
  // $img1=$_FILES['image1'];
  // $img2=$_FILES['image2'];

  $insert_product ="update products set product_qty='$product_qty',brand_id='$product_brand',product_price='$product_price',cat_id='$product_category',gender_id='$product_gender',product_desc='$product_desc',product_keywords='$product_keywords' where product_id='$update_id'";
  $insert_con= mysqli_query($con,$insert_product);
  if ($insert_con) {
    echo "<h1 align='center' color:'lightgreen'>yout data has been sucessfully submitted</h1>";
    header("location:delete_edit.php");

  }
}

?>

</form>










