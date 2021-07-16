<form method="post" action = "index.php">
     

<button name="subject" type="submit" value="Home">Home</button> 

</form>
 

<?php
include("dbconnection.php"); 

if ($_SERVER["REQUEST_METHOD"]=="POST"){

$email     =  $_POST['email'];
$password   =  $_POST['password']; 
    
    
}
  

$query_s="select * from admins where email='$email' and password='$password'";

$run_query  = mysqli_query($con, $query_s);


$result= mysqli_num_rows($run_query);
if($result > 0){
   // while($row=mysqli_fetch_array($run_query)){  $me=$row['Full_name']; echo $me;}
    echo "welcome!<br><br>";  
    include("5admin.php");
}  else{
    echo "you are not a user! please ask a DBA. or start again";   
    include ("2adminlog.php");
    include ("index.php");
    
}
  

mysqli_close($con);

?>