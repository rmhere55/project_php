<?php 
include('../includes/connect.php');

if(isset($_POST['insert_cat'])){
  $catagor_title = $_POST['Cat_title'];

// select data from database
$select_query= "SELECT * FROM catagory WHERE catagory_title = '$catagor_title' ";
// echo $select_query;
// die;
$result_select = mysqli_query($con , $select_query);
$number = mysqli_num_rows($result_select);
if($number>0 ){
  echo "<script> alert('this category is  present in the data base')</script>";
} else{



  $insert_query = "insert into `catagory` (catagory_title) value ('$catagor_title') ";
//   echo " '$insert_query' tu cla ya nhi";
// die;
  $result = mysqli_query($con , $insert_query);
  if($result ){
    echo "<script> alert('Catagory has been inserted successfully')</script>";
  }
}}

?>



<div class="bg-light">
  <h3 class="text-center p-1"> Insert Catagory </h3>
</div>
<form method ="post" action="<?php echo $_SERVER['PHP_SELF'].'?Insert_Catagory'; ?>"
class="mb-2">
  
    <div class="input-group w-90 mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" placeholder="Insert_Catagory" name ="Cat_title" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group w-90 mb-3 m-auto">

  <input type="submit" class="form-control bg-info"   name ="insert_cat" value ="inset_Catagory" 
  aria-label="Username" aria-describedby="basic-addon1">
    </div>
</form>