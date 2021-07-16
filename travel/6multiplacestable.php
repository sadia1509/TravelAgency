<!DOCTYPE html>
<html>
<head>

</head>
<body>
 

<button onclick="myFunction10()">show</button>

<div id="myDIV10"> 
<?php
include("dbconnection.php");

$sql="SELECT * FROM multiplaces";

$record=mysqli_query($con,$sql);

?> 
        
        <table width="600" border="1" cellpadding="1" cellspacing="1">
            <tr>
                <th>ID</th>
                 <th>Place ID no 1</th>
                <th>Place ID no 2</th>
                  <th>Place ID no 3</th>
                   <th>Place ID no 4</th>
                    <th>Place ID no 5</th>
                  
            </tr>
            
            <?php
          //  echo "Users";
            if(mysqli_num_rows($record)>0){
            while ($use=mysqli_fetch_assoc($record)){
                echo "<tr>"; 
                echo "<td>".$use['id']."</td>";
                echo "<td>".$use['pid1']."</td>";
                 echo "<td>".$use['pid2']."</td>";
                 echo "<td>".$use['pid3']."</td>";
                 echo "<td>".$use['pid4']."</td>";
                 echo "<td>".$use['pid5']."</td>";
                
            }
            }  else {
                echo "(0 result)";
            }
            ?>
            
                 
         </table>  
</div> 

<script>
function myFunction10() {
  var x = document.getElementById("myDIV10");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

</body>
</html>