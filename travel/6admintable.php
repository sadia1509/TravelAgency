<!DOCTYPE html>
<html>
<head>

</head>
<body>
 

<button onclick="myFunction1()">show</button>

<div id="myDIV1"> 


<?php
include("dbconnection.php");

$sql="SELECT * FROM admins";

$record=mysqli_query($con,$sql);

?>

 
        
        <table  width="600" border="1" cellpadding="1" cellspacing="1">
            <tr>
                <th>ID</th>
                 <th>Full Name</th>
                <th>Email</th>
                 <th>Password</th> 
                  <th>Mobile Number</th> 
                 <th>Phone Number</th>
                  
            </tr>
            
            <?php
           // echo "Admins";
            if(mysqli_num_rows($record)>0){
            while ($use=mysqli_fetch_assoc($record)){
                echo "<tr>"; 
                echo "<td>".$use['id']."</td>";
                echo "<td>".$use['Full_name']."</td>";
                echo "<td>".$use['Email']."</td>";
                echo "<td>".$use['password']."</td>"; 
                echo "<td>".$use['Mobile_number']."</td>";
                 echo "<td>".$use['Phone_number']."</td>"; 
            }
            } else {
                echo "(0 result)";
            }
            ?>
            
            
        </table> 

</div>
 
<script>
function myFunction1() {
  var x = document.getElementById("myDIV1");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
 

</body>
</html>

