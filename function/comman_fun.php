<?php
include('../includes/connect.php')

// gettin product
function geetingfun(){
    global $con;
    // condition to check is set 
    if (isset($_GET['catagory'])){
    if (isset($_GET['brand'])){

$select_query = "SELECT * FROM `product` order by rand() limit 0,4";

$result_query = mysqli_query($con , $select_query);
// $row = mysqLi_fetch_assoc($result_query);
echo $row['product_title'];
while($row = mysqLi_fetch_assoc($result_query)){
  $product_id = $row['product_id'];

$product_title = $row['product_title'];
$product_description = $row['product_description'];
// $product_keyword = $row['product_keyword'];
$product_cataogries = $row['catagory_id'];
$product_brand = $row['brand_id'];
$product_price = $row['product_price'];
$product_image1 = $row['product_image1'];

echo "<div class='col-md-3'>
<div class='card  ' style='width: 18rem;'>
  <img src='./admit_area/product_img/$product_image1' class='card-img-top' alt='$product_title'>
  <div class='card-body'>
    <h5 class='card-title'>$product_title </h5>
    <p class='card-text'>$product_description </p>
    <a href='#' class='btn btn-primary'>Add cart</a>
    <a href='produc_detail.php?product_id=$product_id ' class='btn btn-secondary'>view more</a>
  </div>
</div>
</div>";

}
    }}
}

// get all product 
function get_all_product(){
  global $con;
  // condition to check is set 
  if (isset($_GET['catagory'])){
  if (isset($_GET['brand'])){

$select_query = "SELECT * FROM `product` order by rand() ";

$result_query = mysqli_query($con , $select_query);
// $row = mysqLi_fetch_assoc($result_query);
echo $row['product_title'];
while($row = mysqLi_fetch_assoc($result_query)){
$product_id = $row['product_id'];

$product_title = $row['product_title'];
$product_description = $row['product_description'];
// $product_keyword = $row['product_keyword'];
$product_cataogries = $row['catagory_id'];
$product_brand = $row['brand_id'];
$product_price = $row['product_price'];
$product_image1 = $row['product_image1'];

echo "<div class='col-md-3'>
<div class='card  ' style='width: 18rem;'>
<img src='./admit_area/product_img/$product_image1' class='card-img-top' alt='$product_title'>
<div class='card-body'>
  <h5 class='card-title'>$product_title </h5>
  <p class='card-text'>$product_description </p>
  <a href='#' class='btn btn-primary'>Add cart</a>
  <a href='produc_detail.php?product_id=$product_id ' class='btn btn-secondary'>view more</a>
</div>
</div>
</div>";

}
  }}


}






// getting uniqe catagare
function unique_category(){
    global $con;
    // condition to check is set 
    if (isset($_GET['catagory'])){
    // if (isset($_GET['brand'])){
$catagory_id = $_GET['catagory'];
$select_query = "SELECT * FROM `product` where catagory_id = $catagory_id ";

$result_query = mysqli_query($con , $select_query);
$num_of_row = mysqli_num_rows($result_query);
if ($num_of_row ==0){
    echo "<h2 class='text-center text-danger'>Sorry !product  Not in stock </h2>";
    

}
// $row = mysqLi_fetch_assoc($result_query);
echo $row['product_title'];
while($row = mysqLi_fetch_assoc($result_query)){
  $product_id = $row['product_id'];

$product_title = $row['product_title'];
$product_description = $row['product_description'];
// $product_keyword = $row['product_keyword'];
$product_cataogries = $row['catagory_id'];
$product_brand = $row['brand_id'];
$product_price = $row['product_price'];
$product_image1 = $row['product_image1'];

echo "<div class='col-md-3'>
<div class='card  ' style='width: 18rem;'>
  <img src='./admit_area/product_img/$product_image1' class='card-img-top' alt='$product_title'>
  <div class='card-body'>
    <h5 class='card-title'>$product_title </h5>
    <p class='card-text'>$product_description </p>
    <a href='#' class='btn btn-primary'>Add cart</a>
    <a href='produc_detail.php?product_id=$product_id ' class='btn btn-secondary'>view more</a>
  </div>
</div>
</div>";

}
    }
}


// getting uniqe catagare
function unique_brand(){
    global $con;
    // condition to check is set 
    if (isset($_GET['brand'])){
    // if (isset($_GET['brand'])){
$brand_id = $_GET['brand'];
$select_query = "SELECT * FROM `product` where brand_id = $brand_id ";

$result_query = mysqli_query($con , $select_query);
$num_of_row = mysqli_num_rows($result_query);
if ($num_of_row ==0){
    echo "<h2 class='text-center text-danger'>Sorry ! brand Not in stock </h2>";
    

}
// $row = mysqLi_fetch_assoc($result_query);
echo $row['product_title'];
while($row = mysqLi_fetch_assoc($result_query)){
  $product_id = $row['product_id'];

$product_title = $row['product_title'];
$product_description = $row['product_description'];
// $product_keyword = $row['product_keyword'];
$product_cataogries = $row['catagory_id'];
$product_brand = $row['brand_id'];
$product_price = $row['product_price'];
$product_image1 = $row['product_image1'];

echo "<div class='col-md-3'>
<div class='card  ' style='width: 18rem;'>
  <img src='./admit_area/product_img/$product_image1' class='card-img-top' alt='$product_title'>
  <div class='card-body'>
    <h5 class='card-title'>$product_title </h5>
    <p class='card-text'>$product_description </p>
    <a href='#' class='btn btn-primary'>Add cart</a>
    <a href='produc_detail.php?product_id=$product_id ' class='btn btn-secondary'>view more</a>
  </div>
</div>
</div>";

}
    }
}

// getting brand display 
function getbrand(){
    global $con;
    
    $select_brand = "SELECT * FROM brand";

    // Perform the query
    $result_brands = mysqli_query($con, $select_brand);

    // Check if the query was successful
    if (!$result_brands) {
        die("Error in the query: " . mysqli_error($con));
    }
    $brand_id = $row_data['brand_id'];
    // Fetch the data using a loop, assuming there are multiple rows
    while ($row_data = mysqli_fetch_assoc($result_brands)) {
    echo "<li class='nav-item'>
    <a href='index.php?brand=".$row_data['brand_id']."' class='nav-link text-dark'>". $row_data['brand_title']." </a> </li>";
    }

    // Close the result set
    mysqli_free_result($result_brands);



}

// getting catagories display 
function getcatagors(){
    global $con;
    
     // Assuming you have a valid database connection named $con
 
     $select_catagory = "SELECT * FROM catagory ";
 
     // Perform the query
     $result_catagory= mysqli_query($con, $select_catagory);
 
     // Check if the query was successful
     if (!$result_catagory) {
         die("Error in the query: " . mysqli_error($con));
     }
          $catagory_id = $row_data['catagory_id'];
     // Fetch the data using a loop, assuming there are multiple rows
     while ($row_data = mysqli_fetch_assoc($result_catagory)) {
           
        echo "<li class='nav-item'>
         <a href='index.php?catagory=".$row_data['catagory_id']."' class='nav-link text-dark'>". $row_data['catagory_title']." </a> </li>";
     }
 
     // Close the result set
     mysqli_free_result($result_catagory);
}

// searching data 
function searchData() {
  // geetingfun();
  global $con;
  // condition to check is set 
  // if (isset($_GET['catagory'])){
  if (isset($_GET['search_data_product'])){
    $search_data_value = $_GET['search_data'];
$select_query = "SELECT * FROM `product` where product_keyword like '%$search_data_value%'";

$result_query = mysqli_query($con , $select_query);
$num_of_row = mysqli_num_rows($result_query);
if ($num_of_row ==0){
    echo "<h2 class='text-center text-danger'>Sorry ! brand Not in stock </h2>";
    

}

// $row = mysqLi_fetch_assoc($result_query);
echo $row['product_title'];
while($row = mysqLi_fetch_assoc($result_query)){
$product_id = $row['product_id'];

$product_title = $row['product_title'];
$product_description = $row['product_description'];
$product_keyword = $row['product_keyword'];
$product_cataogries = $row['catagory_id'];
$product_brand = $row['brand_id'];
$product_price = $row['product_price'];
$product_image1 = $row['product_image1'];

echo "<div class='col-md-3'>
<div class='card  ' style='width: 18rem;'>
<img src='./admit_area/product_img/$product_image1' class='card-img-top' alt='$product_title'>
<div class='card-body'>
  <h5 class='card-title'>$product_title </h5>
  <p class='card-text'>$product_description </p>
  <a href='#' class='btn btn-primary'>Add cart</a>
  <a href='produc_detail.php?product_id=$product_id ' class='btn btn-secondary'>view more</a>
</div>
</div>
</div>";

}
}
}
// view detail function
function view_detail(){
  global $con;
  // condition to check is set 
  if(isset($_GET['product_id'])){
  if (isset($_GET['catagory'])){
  if (isset($_GET['brand'])){
$product_id =$_GET['product_id'];
$select_query = "SELECT * FROM `product` where product_id = $product_id";

$result_query = mysqli_query($con , $select_query);
// $row = mysqLi_fetch_assoc($result_query);
echo $row['product_title'];
while($row = mysqLi_fetch_assoc($result_query)){
$product_id = $row['product_id'];

$product_title = $row['product_title'];
$product_description = $row['product_description'];
// $product_keyword = $row['product_keyword'];
$product_cataogries = $row['catagory_id'];
$product_brand = $row['brand_id'];
$product_price = $row['product_price'];
$product_image1 = $row['product_image1'];
$product_image2 = $row['product_image2'];
$product_image3 = $row['product_image3'];

echo "<div class='col-md-3'>
<div class='card  ' style='width: 18rem;'>
<img src='./admit_area/product_img/$product_image1' class='card-img-top' alt='$product_title'>
<div class='card-body'>
  <h5 class='card-title'>$product_title </h5>
  <p class='card-text'>$product_description </p>
  <a href='#' class='btn btn-primary'>Add cart</a>
  <a href='produc_detail.php?product_id=$product_id ' class='btn btn-secondary'>view more</a>
</div>
</div>
</div> 

<div class='col-md-8'>
<!-- related images -->
<div class='row'>
    <div class='col-md-12'>
        <h4 class='text-center text-info mb-5'>Related Products</h4>
    </div>
    <div class='col-md-6'>
        
<img src='./admit_area/product_img/$product_image2' class='card-img-top' alt='$product_title'>
    </div>

    <div class='col-md-6'>

<img src='./admit_area/product_img/$product_image3' class='card-img-top' alt='$product_title'>
    </div>

</div>";

}
  }}
}}
?>