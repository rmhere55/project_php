<?php


$servername = "localhost";
$username = "root";
$password = "root@2023";
$db = "mystore";

if(!$con = mysqli_connect($servername,$username,$password,$db))
{
    die("failed to connect ");
}
// echo "yaha tu char rhai h ya nhi ";
  ?>