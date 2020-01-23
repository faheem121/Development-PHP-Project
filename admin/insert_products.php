<?php  

Include ("connection.php");


?>




<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<form class="form-horizontal" method="post" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend align="center" class="text-success" enctype="multipart/form-data">INSERT YOUR PRODUCTS</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" >PRODUCT TITLE</label>  
  <div class="col-md-4">
  <input id="product_name" name="product_title" placeholder="PRODUCT TITLE" class="form-control input-md" required type="text">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >PRODUCT QUANTITY</label>  
  <div class="col-md-4">
  <input id="product_name" name="product_qty" placeholder="PRODUCT QUANTITY" class="form-control input-md" required type="number">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" >PRODUCT BRAND</label>
  <div class="col-md-4">
    <select  name="product_brand" class="form-control">
    <option selected required>Select your brand</option>
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
  <input  name="product_price" placeholder="PRODUCT PRICE" class="form-control input-md" required type="number">
    
  </div>
</div>



<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" >PRODUCT CATEGORY</label>
  <div class="col-md-4">
    <select  name="product_category" class="form-control">
      
      <option selected required>Select your category</option>
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
      
       <option selected required>SELECT MALE/FEMALE/KIDS</option>
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
    <textarea class="form-control"  name="product_desc" required></textarea>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" >PRODUCT KEYWORDS</label>  
  <div class="col-md-4">
  <input  name="product_keywords" placeholder="PRODUCT KEYWORDS" class="form-control input-md" required type="text">
    
  </div>
</div>







    
 <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" >main_image</label>
  <div class="col-md-4">
    <input  name="image1" class="input-file" type="file">
  </div>
</div>
<!-- File Button  -->
<div class="form-group">
  <label class="col-md-4 control-label" >image1</label>
  <div class="col-md-4">
    <input  name="image2" class="input-file" type="file">
  </div>
</div>

<!-- Button -->
<div align="center">
  <input type="submit" class="btn btn-primary" name="insert" value="Insert product">
  <a href="admin_pannel.php" style="text-decoration: none;text-align: center;"  >Back to Admin pannel</a>


</div>

</fieldset>




<?php  
if (isset($_POST['insert'])) {

  $product_title=$_POST['product_title'];
  $product_qty=$_POST['product_qty'];
  $product_brand=$_POST['product_brand'];
  $product_price=$_POST['product_price'];
  $product_category=$_POST['product_category'];
  $product_gender=$_POST['product_gender'];
  $product_desc=$_POST['product_desc'];
  $product_keywords=$_POST['product_keywords'];
  $img1=$_FILES['image1']['name'];
  $img2=$_FILES['image2']['name'];

  $temp_name1 = $_FILES['image1']['tmp_name'];
  $temp_name2 = $_FILES['image2']['tmp_name'];

  move_uploaded_file($temp_name1,"upload_images/$img1");
  move_uploaded_file($temp_name2,"upload_images/$img2");





  $insert_product ="INSERT INTO products (product_title,product_qty,brand_id,product_price,cat_id,gender_id,product_desc,product_keywords,img1,img2) VALUES ('$product_title','$product_qty','$product_brand','$product_price','$product_category','$product_gender','$product_desc','$product_keywords','$img1','$img2')";
  $insert_con= mysqli_query($con,$insert_product);
  if ($insert_con) {
    echo "<h1 align='center' color:'lightgreen'>yout data has been sucessfully submitted</h1>";

  }
}

?>

</form>