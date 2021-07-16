<!DOCTYPE html>
<html>
<head>

</head>
<body>
 

<button onclick="myFunction9()">show</button>

<div id="myDIV9"> 
<?php
include("dbconnection.php");

$sql="SELECT * FROM users";

$record=mysqli_query($con,$sql);

?> 
        
        <table width="1300" border="1" cellpadding="1" cellspacing="1">
            <tr>
                <th>ID</th>
                 <th>Full Name</th>
                <th>Email</th>
                 <th>Password</th> 
                 <th>Building no</th>
                 <th>Road</th> 
                 <th>Area</th>
                 <th>City</th> 
                  <th>Mobile Number</th> 
                 <th>Phone Number</th>
                 <th>Card Name</th>
                 <th>Card Number</th> 
                 <th>Selection id</th> 
                  
            </tr>
            
            <?php
          //  echo "Users";
            if(mysqli_num_rows($record)>0){
            while ($use=mysqli_fetch_assoc($record)){
                echo "<tr>"; 
                echo "<td>".$use['id']."</td>";
                echo "<td>".$use['Full_name']."</td>";
                echo "<td>".$use['Email']."</td>";
                echo "<td>".$use['password']."</td>"; 
                echo "<td>".$use['Building_no']."</td>";
                echo "<td>".$use['Road']."</td>";
                echo "<td>".$use['Area']."</td>";
                echo "<td>".$use['City']."</td>"; 
                echo "<td>".$use['Mobile_number']."</td>";
                 echo "<td>".$use['Phone_number']."</td>";
                echo "<td>".$use['Card_name']."</td>";
                echo "<td>".$use['Card_no']."</td>";
                echo "<td>".$use['selected-id']."</td>";
            }
            }  else {
                echo "(0 result)";
            }
            ?>
            
                 
         </table>  
</div> 

<script>
function myFunction9() {
  var x = document.getElementById("myDIV9");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

</body>
</html>