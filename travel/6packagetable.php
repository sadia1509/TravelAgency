<!DOCTYPE html>
<html>
<head>

</head>
<body>
 

<button onclick="myFunction3()">show</button>

<div id="myDIV3"> 
<?php
include("dbconnection.php");

$sql="SELECT * FROM packages";

$record=mysqli_query($con,$sql);

?> 
        
        <table width="800" border="1" cellpadding="1" cellspacing="1">
            <tr>
                <th>Code</th>
                 <th>Name</th> 
                 <th>Duration(Days)</th> 
                 <th>Place no 1</th>
                 <th>Place no 2</th> 
                 <th>Place no 3</th>
                  <th>Package Expense</th>  
                  <th>Picture id</th>
                  
            </tr>
            
            <?php
            
           // echo "Packages";
            if(mysqli_num_rows($record)>0){
            while ($use=mysqli_fetch_assoc($record)){
                echo "<tr>"; 
                echo "<td>".$use['Code']."</td>";
                echo "<td>".$use['Name']."</td>"; 
                echo "<td>".$use['Duration(Days)']."</td>";
                echo "<td>".$use['place1']."</td>";
                echo "<td>".$use['place2']."</td>"; 
                echo "<td>".$use['place3']."</td>"; 
                echo "<td>".$use['price']."</td>";
                echo "<td>".$use['pic_id']."</td>";
            }
            }  else {
                echo "   (0 result)";
            }
            ?>
            
            
        </table>  
</div>
 

<script>
function myFunction3() {
  var x = document.getElementById("myDIV3");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

</body>
</html>