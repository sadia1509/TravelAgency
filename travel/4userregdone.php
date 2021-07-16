<?php
include("dbconnection.php"); 

if ($_SERVER["REQUEST_METHOD"]=="POST"){

$fullname     =  $_POST['fullname'];
$email        =  $_POST['email'];
$password     =  $_POST['password'];
$bn           =  $_POST['bn'];
$road         =  $_POST['road'];
$area         =  $_POST['area'];
$city         =  $_POST['city'];
$pnum         =  $_POST['pnum'];
$mnum         =  $_POST['mnum'];  
    
    
}
 
    
    
    $query= "INSERT INTO `users` (`id`, `Full_name`, `Email`, `password`, `Building_no`, `Road`, `Area`, `City`, `Phone_number`, `Mobile_number`, `selected-id`, `Card_name`, `Card_no`) VALUES  (NULL, '$fullname', '$email', '$password', '$bn', '$road','$area', '$city', '$pnum', '$mnum', NULL, NULL, NULL)"; 

$run_query  = mysqli_query($con, $query);

if ($run_query){
    echo "Data has been inserted in the database. Now you can start again";
    include("index.php");
}else {
    echo "Data could not be inserted. please try again";
    include("2userreg.php");
    include ("index.php");
}   
  
mysqli_close($con);

?>