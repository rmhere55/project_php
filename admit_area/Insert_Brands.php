
<?php 
include('../includes/connect.php');

if(isset($_POST['inset_Brands'])){
  $brand_title = $_POST['inset_Brands'];

// select data from database
$select_query= "SELECT * FROM brand WHERE brand_title = '$brand_title' ";
// echo $select_query;
// die;
$result_select = mysqli_query($con , $select_query);
$number = mysqli_num_rows($result_select);
if($number>0 ){
  echo "<script> alert('this category is  present in the data base')</script>";
} else{



  $insert_query = "insert into `brand` (brand_title) value ('$brand_title') ";
//   echo " '$insert_query' tu cla ya nhi";
// die;
  $result = mysqli_query($con , $insert_query);
  if($result ){
    echo "<script> alert('brand has been inserted successfully')</script>";
  }
}}

?>




<div class="bg-light">
  <h3 class="text-center p-1"> Insert Brands </h3>
</div>
<form method ="post" action="<?php echo $_SERVER['PHP_SELF'].'?Insert_Brands    '; ?>" class="mb-2">
  
    <div class="input-group w-90 mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" placeholder="Insert_Brands" name ="inset_Brands" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group w-90 mb-3 m-auto">

  <input type="submit" class="form-control bg-info" placeholder="Insert_Brands"   name ="insert_cat" value ="inset_Brands" 
  aria-label="Username" aria-describedby="basic-addon1">
    </div>
</form>