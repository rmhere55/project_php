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
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <div class="collapse navbar-collapse  d-grid gap-2 d-md-flex justify-content-md-end" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          Welcome,
          <?php echo $user_data['name']; ?>.
        </li>
      </ul>
    </div>
  </nav>
</div>


<!-- SECOND CHILD -->

<div class="bg-light">
  <h3 class="text-center p-2">Mange Details</h3>
</div>

<!-- three CHILD -->
 <div class="container-fluid">
<div class="row">
  <div class="col-md-12 bg-secondary p-1 d-flex align-item-center">
    <div>
      <a href="..">
        <img src="https://picsum.photos/id/4/50/50" alt="admin_image"></a>
      <p class="text-light text-center"> Admin name </p>
    </div>
    <div class="button text-center  align-item-cente">
<!--       
      <button><a href="" class="nav-link text-light bg-info my-1"></a></button> -->
      <button><a href="index.php?Insert_product"
          class="nav-link text-light bg-info my-1">Insert Product</a></button>
          <button><a href=""
          class="nav-link text-light bg-info my-1">View Product</a></button>
          <button><a href="index.php?Insert_Catagory"
          class="nav-link text-light bg-info my-1">Insert Category</a></button>
          <button><a href=""
          class="nav-link text-light bg-info my-1">View Category</a></button>
          <button>
            <a href="index.php?Insert_Brands"
          class="nav-link text-light bg-info my-1"> Insert Brand</a></button>
          <button><a href=""
          class="nav-link text-light bg-info my-1">View Brand</a></button>
          <button><a href=""
          class="nav-link text-light bg-info my-1">All Oder</a></button>
           <button><a href=""
            class="nav-link text-light bg-info my-1">All Payment</a></button>
            <button><a href=""
              class="nav-link text-light bg-info my-1">List user</a></button>
              <button><a href=""
                class="nav-link text-light bg-info my-1">Logout</a></button>
          
        
      
    </div>
  </div>
</div>



<!-- fourt child -->

<div class="container my-5">
  <?php
if(isset($_GET['Insert_Catagory'])){
  include('Insert_Catagory.php');
}
if(isset($_GET['Insert_Brands'])){
  include('Insert_Brands.php');
}
if(isset($_GET['Insert_product'])){
  include('Insert_product.php');
}

?>
</div>
     <!-- last child  --> 
     <div class="bg-info p-3 text-center">
<p> All right reseverd  c - dediged  by Rm</p>
    </div> 
</div>
<!-- bootstrap link for js-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>