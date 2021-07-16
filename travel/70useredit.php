<?php 
include("dbconnection.php");
session_start();
$em=$_SESSION['Email'];

$sql="Select * from users  where email='$em'";
//$sql="Select * from user" ;

$rec=mysqli_query($con, $sql);
$ck=mysqli_num_rows($rec);
while($row=mysqli_fetch_array($rec)){
   $mm=$row['Email'];  $nn=$row['password'];   
$m=$row['Full_name'];  $n=$row['Building_no'];    $_SESSION['id']=$row['id'];
    
   $mm1=$row['Road'];  $nn1=$row['Area'];   
$m1=$row['City'];  $n1=$row['Phone_number'];  $n2=$row['Mobile_number']; 
    
    ?> <form action = "70useredit1.php" method = post><br><br> 
       Email:   <input type=text name="eman" value="<?php echo $mm; ?>"><br><br>
     Password:  <input type=text name="pass" value="<?php echo $nn; ?>"><br><br>
     Fullname:  <input type=text name="fn" value="<?php echo $m; ?>"><br><br>
     Building No:  <input type=text name="bn" value="<?php echo $n; ?>"><br><br>
     
       Road:   <input type=text name="eman1" value="<?php echo $mm1; ?>"><br><br>
     Area:  <input type=text name="pass1" value="<?php echo $nn1; ?>"><br><br>
     City:  <input type=text name="fn1" value="<?php echo $m1; ?>"><br><br>
      Mobile Number:  <input type=text name="sa2" value="<?php echo $n2; ?>"><br><br>
     Phone Number:  <input type=text name="sa1" value="<?php echo $n1; ?>"><br><br>
     
   <input type=submit name="submit31" value="update">
     </form>
    
    <?php
}

?>