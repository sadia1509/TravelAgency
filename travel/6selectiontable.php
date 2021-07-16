<!DOCTYPE html>
<html>
<head>

</head>
<body>
 

<button onclick="myFunction6()">show</button>

<div id="myDIV6"> 
<?php
include("dbconnection.php");

$sql="SELECT * FROM user_selection";

$record=mysqli_query($con,$sql);

?> 
        <table width="700" border="1" cellpadding="1" cellspacing="1">
            <tr>
                <th>ID</th>
                 <th>User ID</th> 
                 <th>Place ID</th> 
                 <th>Hotel ID</th>
                 <th>Transport ID</th>  
                 <th>Package Code</th> 
                 <th>Payment Code</th> 
                  
            </tr>
            
            <?php
            
           // echo "User's Selections";
            if(mysqli_num_rows($record)>0){
            while ($use=mysqli_fetch_assoc($record)){
                echo "<tr>"; 
                echo "<td>".$use['id']."</td>";
                echo "<td>".$use['u_id']."</td>";  
                echo "<td>".$use['place_id']."</td>";
                echo "<td>".$use['hotel_id']."</td>"; 
                echo "<td>".$use['trasport_id']."</td>";  
                echo "<td>".$use['package_code']."</td>"; 
                echo "<td>".$use['payment_code']."</td>"; 
            }
            }  else {
                echo "   (0 result)";
            }
            ?>
            
             </table>  
</div>
 

<script>
function myFunction6() {
  var x = document.getElementById("myDIV6");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

</body>
</html>