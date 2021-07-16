<?php
include("dbconnection.php"); 
session_start();
if ($_SERVER["REQUEST_METHOD"]=="POST"){

$email     =  $_POST['email'];
$password   =  $_POST['password']; 
    
    
}
  

$query_s="select * from Users where email='$email' and password='$password'";

$run_query  = mysqli_query($con, $query_s);


$result= mysqli_num_rows($run_query);
if($result > 0){  
     $_SESSION['Email']=$email; 
    while($row=mysqli_fetch_array($run_query)){ 
        $me=$row['Full_name'];  
        $_SESSION['Full_name']=$me; 
        $_SESSION['id']=$row['id']; 
         $_SESSION['Email']=$row['Email'];
    }
    echo "welcome ";  
    include("7user.php");
}  else{
    echo "you are not a user! please start again";
    
include("1extralog.php");
    
}
  


?>

<form method="post" action = "index.php">
     

<button name="subject" type="submit" value="Home">Home</button> 

</form>
 