<?php 
include('includes/connect.php');
include('./function/comman_fun.php');
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-info">
    <a class="navbar-brand" href="#">LOGO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Products</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cart<i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">total price</a>
        </li>
        
      </ul>
      <form class="d-flex" role="search" action ="search_product.php" method ="get" >
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
        <input type="submit" value="Search" class="btn btn-outline-success">
      </form>
    </div>
  
</nav>
<!-- second child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar me-auto">
    <li class="nav-item">
      <a class="nav-link" href="#">Welcome Guest</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Login</a>
    </li>
  </ul>
</nav>
<!--  third child -->
  <div class="bg-light">
  <h3 class="text-center">Hidden Store </h3>
  <p class="text-center"> communication is at the heart of e-commerce and community</p>
  </div>


<!-- fourth child -->
<div class="container-fluid">
<div class="row">
<div class="col-md-9">
  <!-- product -->

<div class="row">
        </div>
    </div>
<?php
// geetingfun();
view_detail();
unique_category();
unique_brand();
?>

<!-- 
  <div class="col-md-3">
    <div class="card  " style="width: 18rem;">
      <img src="https://picsum.photos/id/1/100/100" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title </p>
        <a href="#" class="btn btn-primary">Add cart</a>
        <a href="#" class="btn btn-secondary">view more</a>
      </div>
    </div>
  </div> -->






</div>


</div>
  
<div class="col-md-3">
  <!-- sidenav -->

  <div class="flex-shrink-0 p-3 bg-body-secondary" style="width: 90%;  height: auto;">
    <a href="/" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
      <svg class="bi pe-none me-2" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-5 fw-semibold">Brands</span>
    </a>
    <ul class="list-unstyled ps-0">
      
      <?php
        getbrand();

    // $select_brand = "SELECT * FROM brand";

    // // Perform the query
    // $result_brands = mysqli_query($con, $select_brand);

    // // Check if the query was successful
    // if (!$result_brands) {
    //     die("Error in the query: " . mysqli_error($con));
    // }
    // $brand_id = $row_data['brand_id'];
    // // Fetch the data using a loop, assuming there are multiple rows
    // while ($row_data = mysqli_fetch_assoc($result_brands)) {
    //   echo "<li class='nav-item'>
    //   <a href='index.php?brand=".$row_data['brand_id']."' class='nav-link text-dark'>". $row_data['brand_title']." </a> </li>";
    // }

    // // Close the result set
    // mysqli_free_result($result_brands);

    // Close the database connection
    // mysqli_close($con);
?>

      <li class="mb-1">
      
      <li class="mb-1">
        
      </li>
      <a href="/" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
        <svg class="bi pe-none me-2" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-5 fw-semibold">Catogarie  </span>
      </a>
      <ul class="list-unstyled ps-0">
        <!-- <li class="mb-1">
          <button class="btn btn-toggle  align-items-center rounded border-0" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
            Catogarie
          </button>
          
        </li> -->
        <?php
        getcatagors();
       //   $select_brand = "select * from 'brand'";
    
       //  echo $result_brands = mysqli_query($con , $select_brand);
        
       //  $row_data = mysqLi_fetch_assoc($result_brands);
       // echo $row_data['brand_title'];
        
     // Assuming you have a valid database connection named $con
  
    //  $select_catagory = "SELECT * FROM catagory ";
  
    //  // Perform the query
    //  $result_catagory= mysqli_query($con, $select_catagory);
  
    //  // Check if the query was successful
    //  if (!$result_catagory) {
    //      die("Error in the query: " . mysqli_error($con));
    //  }
    //       $catagory_id = $row_data['catagory_id'];
    //  // Fetch the data using a loop, assuming there are multiple rows
    //  while ($row_data = mysqli_fetch_assoc($result_catagory)) {
            
    //     echo "<li class='nav-item'>
    //      <a href='index.php?catagory=".$row_data['catagory_id']."' class='nav-link text-dark'>". $row_data['catagory_title']." </a> </li>";
    //  }
  
    //  // Close the result set
    //  mysqli_free_result($result_catagory);
  
     // Close the database connection
    //  mysqli_close($con);
  ?>

    </ul>
  </div>
</div>
</div>


    <!-- last child  -->
    <!-- <div class="bg-info p-3 text-center">
<p> All right reseverd  c - dediged  by Rm</p> <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
    </div> -->
    <?php
      include('includes/footer.php');
    ?>
    </div></div>




    <!-- bootstrap link for js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script> --
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" ></script>-->
</body>
</html> 
