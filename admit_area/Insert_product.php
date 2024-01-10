

<?php 

              // ini_set('display_errors', 1);
              // ini_set('display_startup_errors', 1);
              // error_reporting(E_ALL);  // print_r($_SESSION);
              // // die;








include('../includes/connect.php');
if (isset($_POST['insert_product'])){
$product_title = $_POST['product_title'];
$product_description = $_POST['product_description'];
$product_keyword = $_POST['product_keyword'];
$product_cataogries = $_POST['product_cataogries'];
$product_brand = $_POST['product_brand'];
$product_price = $_POST['product_price'];
// $product_status = $_POST['product_status'];

// Assuming you have form data with file uploads
$product_image1 = $_FILES['product_image1']['name'];
$temp_image1 = $_FILES['product_image1']['tmp_name'];

$product_image2 = $_FILES['product_image2']['name'];
$temp_image2 = $_FILES['product_image2']['tmp_name'];

$product_image3 = $_FILES['product_image3']['name'];
$temp_image3 = $_FILES['product_image3']['tmp_name'];

// Destination directory
$destinationDirectory = "./product_img/$product_image1";
if(!file_exists($destinationDirectory))
{
       mkdir($destinationDirectory, 0777, true);
}
// Move uploaded files to the destination directory
move_uploaded_file($temp_image1, $destinationDirectory);
move_uploaded_file($temp_image2, $destinationDirectory . $product_image2);
move_uploaded_file($temp_image3, $destinationDirectory . $product_image3);

// // Accessing the images
//  $product_image1 = $_FILES['product_image1']['name'];
// $product_image2 = $_FILES['product_image2']['name'];
// $product_image3 = $_FILES['product_image3']['name'];

// // Accessing the images temp names
// $temp_image1 = $_FILES['product_image1']['tmp_name'];
// $temp_image2 = $_FILES['product_image2']['tmp_name'];
// $temp_image3 = $_FILES['product_image3']['tmp_name'];

// // Move uploaded files to the destination directory
// move_uploaded_file($temp_image1, "./product_img/".$product_image1);
// move_uploaded_file($temp_image2, "./product_img/".$product_image2);
// move_uploaded_file($temp_image3, "./product_img/".$product_image3);

// Insert query
$insert_query = "INSERT INTO `product`(`product_title`, `product_description`, `product_keyword`, `catagory_id`, `brand_id`,
 `product_img1`, `product_img2`, `product_img3`, `product_price`, `date`) 
 VALUES ('$product_title', '$product_description', '$product_keyword', '$product_cataogries', '$product_brand', 
 '$product_image1', '$product_image2', '$product_image3', '$product_price', NOW())";

// Execute the query
$result_query = mysqli_query($con, $insert_query);

if ($result_query) {
    echo "<script>alert('Success')</script>";
} else {
    // Handle the error, if any
    echo "Error in the query: " . mysqli_error($con);
}


}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ecommerse website using php and sql</title>
    <!-- bootstrap link for css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
 
    <!-- fontaosame  link  -->
    
</head>



<body class = "bg-light">
<div class="container mt-3">

<h1 class="text-center">Insert Product</h1>

<!-- form -->

<form method ="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'].'?Insert_product'; ?>">

<!-- title -->
<div class="form-outline mb-4  w-50 m-auto">
<label for="product_title" class="from-control"> Product title</label>
<input type="text" name="product_title" id="product_title" class="from-control" placeholder = "Enter product title " autocomplete=" off"  required >


</div>


<!-- description -->
<div class="form-outline mb-4  w-50 m-auto">
<label for="product_description" class="from-control"> Product description</label>
<input type="text" name="product_description" id="product_description" class="from-control" placeholder = "Enter product description" autocomplete=" off"  required >


</div>


<!-- keyword -->
<div class="form-outline mb-4  w-50 m-auto">
<label for="product_keyword" class="from-control"> Product keyword</label>
<input type="text" name="product_keyword" id="product_keyword" class="from-control" placeholder = "Enter product keyword" autocomplete=" off"  required >


</div>
<!-- cataogries -->

<div class="form-outline mb-4  w-50 m-auto">



<select name="product_cataogries" id="" class="from-select text-dark">
<option value=""> select a cataogries</option>
<?php
       $select_query = "SELECT * FROM catagory"; // Replace single quotes with backticks or remove them
$result_query = mysqli_query($con, $select_query);

if (!$result_query) {
    die("Error in the query: " . mysqli_error($con));
}

while ($row = mysqli_fetch_assoc($result_query)) {
 
    $category_title = $row['catagory_title'];
    $category_id = $row['catagory_id'];

    echo "<option value='$category_id'>$category_title</option>";
}

// Close the result set
mysqli_free_result($result_query);


?>
<!-- <option value=""> cataogries 0</option> -->

</select>
</div>

<!-- brands -->

<div class="form-outline mb-4  w-50 m-auto">



<select name="product_brand" id="" class="from-select">
<option value=""> select a brand</option>
<?php
       $select_query = "SELECT * FROM brand"; // Replace single quotes with backticks or remove them
$result_query = mysqli_query($con, $select_query);

if (!$result_query) {
    die("Error in the query: " . mysqli_error($con));
}

while ($row = mysqli_fetch_assoc($result_query)) {
 
    $brand_title = $row['brand_title'];
    $brand_id = $row['brand_id'];

    echo "<option value='$brand_id'>$brand_title</option>";
}

// Close the result set
mysqli_free_result($result_query);


?>
</select>
</div>

<!-- Image -->
<div class="form-outline mb-4 w-50 m-auto">
    <label for="product_image" class="form-label">Product image</label>
    <input type="file" name="product_image1" id="product_image" class="form-control" required>
</div>

<!-- Image 2 -->
<div class="form-outline mb-4 w-50 m-auto">
    <label for="product_image" class="form-label">Product image2</label>
    <input type="file" name="product_image2" id="product_image" class="form-control" required>
</div>

<!-- Image 3 -->
<div class="form-outline mb-4 w-50 m-auto">
    <label for="product_image" class="form-label">Product image3</label>
    <input type="file" name="product_image3" id="product_image" class="form-control" required>
</div>

\




<!-- price -->
<div class="form-outline mb-4  w-50 m-auto">
<label for="product_price" class="from-control"> Product price</label>
<input type="text" name="product_price" id="product_price" class="from-control" placeholder = "Enter product price" autocomplete=" off"  required = "required">
</div>


<!-- submit -->
<div class="form-outline mb-4  w-50 m-auto">
    <input type="submit" name = "insert_product" class ="btn btn-info mb-3  px-3" value ="insert Product">

</div>
</div>
</form>
<!-- bootstrap link for js-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>





