<!DOCTYPE html>
<html>
<head>

</head>
<body>
 

<button onclick="myFunction2()">show</button>

<div id="myDIV2"> 
<?php
include("dbconnection.php");

$sql="SELECT * FROM hotels";

$record=mysqli_query($con,$sql);

?>

        
        <table width="700" border="1" cellpadding="1" cellspacing="1">
            <tr>
                <th>ID</th>
                 <th>Name</th> 
                 <th>Road</th> 
                 <th>Area</th>
                 <th>City</th> 
                 <th>Telephone Number</th>
                  <th>Expense</th>  
                  
            </tr>
            
            <?php
            
           // echo "Hotels";
            if(mysqli_num_rows($record)>0){
            while ($use=mysqli_fetch_assoc($record)){
                echo "<tr>"; 
                echo "<td>".$use['id']."</td>";
                echo "<td>".$use['Name']."</td>"; 
                echo "<td>".$use['Road']."</td>";
                echo "<td>".$use['Area']."</td>";
                echo "<td>".$use['City']."</td>"; 
                echo "<td>".$use['Telephone_number']."</td>"; 
                echo "<td>".$use['Expense']."</td>";
            }
            }  else {
                echo "   (0 result)";
            }
            ?>
            
            
        </table>  
</div>
 

<script>
function myFunction2() {
  var x = document.getElementById("myDIV2");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

</body>
</html>