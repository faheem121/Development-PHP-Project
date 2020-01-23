
<?php 

include ("connection.php");


function getGender(){
	


if (isset($_GET['gender_id'])) {
		

		$gender_id=$_GET['gendr_id'];
		$gender_get="select * from products where gender_id='$gender_id'";

		 $gender_con= mysqli_query($con,$pro_get);
                  while ($gender_data=mysqli_fetch_array($gender_con)) {
                     $gender_img1=$gender_data['img1'];
                     $gender_img2=$gender_data['img2'];

                      
                 

            
                              echo " <div class='product-item'>
                              <div class='product-item-wraper'>
                                 <div class='product-image-wraper'>
                                    <a href='product_detail.php'> <img src='admin/upload_images/$gender_img1' data-src='admin/upload_images/$gender_img2' />?></a>
                                 </div>
                                 <div class='product-item-button'>
                                    <a href='#' data-toggle='tooltip' data-placement='left' title='Add to Wishlist'><i class='fa fa-heart' aria-hidden='true'></i></a>
                                    <a href='#' data-toggle='tooltip' data-placement='left' title='Add to Cart'><i class='fa fa-shopping-basket' aria-hidden='true'></i></a>
                                    <a href='#' data-toggle='tooltip' data-placement='left' title='Add to Compare'><i class='fa fa-random' aria-hidden='true'></i></a>
                                 </div>
                              </div>
                              <div class='product-item-detail'>
                                 <p class='product-title'><a href='product_detail.php'> $gender_data[product_desc]</a></p>
                                 <h6 class='product-price color'> PKR-$gender_data[product_price]  </h6>
                              </div>

                           </div>";

                         
		
	}
}


}











?>