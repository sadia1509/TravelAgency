<!DOCTYPE html>
<html>
<head>

</head>
<body>
 

<button onclick="myFunction8()">show</button>

<div id="myDIV8"> 
<?php
include("dbconnection.php");

$sql="SELECT * FROM transports";

$record=mysqli_query($con,$sql);

?> 
        <table width="400" border="1" cellpadding="1" cellspacing="1">
            <tr>
                <th>ID</th>
                 <th>Type</th>  
                 <th>Fare</th> 
                 <th>Location</th>
                  
            </tr>
            
            <?php
            
           // echo "Transports";
            if(mysqli_num_rows($record)>0){
            while ($use=mysqli_fetch_assoc($record)){
                echo "<tr>"; 
                echo "<td>".$use['id']."</td>";
                echo "<td>".$use['Type']."</td>"; 
                echo "<td>".$use['fare']."</td>"; 
                  echo "<td>".$use['Location']."</td>";
            }
            }  else {
                echo "   (0 result)";
            }
            ?>
            
         </table>  
</div>
 

<script>
function myFunction8() {
  var x = document.getElementById("myDIV8");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

</body>
</html>