<!DOCTYPE html>
<html>
<head>

</head>
<body>
 

<button onclick="myFunction4()">show</button>

<div id="myDIV4"> 


<?php
include("dbconnection.php");

$sql="SELECT * FROM payment_system";

$record=mysqli_query($con,$sql);

?>
 
        
        <table width="200" border="1" cellpadding="1" cellspacing="1">
            <tr>
                <th>Code</th>
                 <th>Type</th>  
                  
            </tr>
            
            <?php
            
           // echo "Payment ways";
            if(mysqli_num_rows($record)>0){
            while ($use=mysqli_fetch_assoc($record)){
                echo "<tr>"; 
                echo "<td>".$use['Code']."</td>";
                echo "<td>".$use['Type']."</td>";   
            }
            }  else {
                echo "   (0 result)";
            }
            ?>
            
         
        </table>  
</div>
 

<script>
function myFunction4() {
  var x = document.getElementById("myDIV4");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

</body>
</html>