<!DOCTYPE html>
<html>
<head>

</head>
<body>
 

<button onclick="myFunction7()">show</button>

<div id="myDIV7"> 
<?php
include("dbconnection.php");

$sql="SELECT * FROM tourist_places";

$record=mysqli_query($con,$sql);

?> 
        <table width="600" border="1" cellpadding="1" cellspacing="1">
            <tr>
                <th>ID</th>
                 <th>Name</th>  
                 <th>Area</th>
                 <th>City</th> 
                  <th>Expense</th>  
                 <th>Pictures id</th> 
                  
            </tr>
            
            <?php
            
          //  echo "Tourist Places";
            if(mysqli_num_rows($record)>0){
            while ($use=mysqli_fetch_assoc($record)){
                echo "<tr>"; 
                echo "<td>".$use['id']."</td>";
                echo "<td>".$use['Name']."</td>"; 
                echo "<td>".$use['Area']."</td>";
                echo "<td>".$use['City']."</td>"; 
                echo "<td>".$use['Price']."</td>"; 
                echo "<td>".$use['pic_id']."</td>";
            }
            }  else {
                echo "   (0 result)";
            }
            ?>
            
         </table>  
</div>
 

<script>
function myFunction7() {
  var x = document.getElementById("myDIV7");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

</body>
</html>