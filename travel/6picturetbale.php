<!DOCTYPE html>
<html>
<head>

</head>
<body>
 

<button onclick="myFunction5()">show</button>

<div id="myDIV5"> 
<?php
include("dbconnection.php");

$sql="SELECT * FROM pictures";

$record=mysqli_query($con,$sql);

?> 
        
        <table width="500" border="1" cellpadding="1" cellspacing="1">
            <tr>
                <th>ID</th>
                 <th>Name</th> 
                 <th>Path & image no 1</th> 
                 <th>Path & image no 2</th>
                 <th>Path & image no 3</th>  
                <!-- <th>Image no 1</th> 
                 <th>Image no 2</th>  
                 <th>Image no 3</th>  -->
                  
            </tr>
            
            <?php
            
          //  echo "Pictures";
            if(mysqli_num_rows($record)>0){
            while ($use=mysqli_fetch_assoc($record)){
                echo "<tr>"; 
                echo "<td>".$use['id']."</td>";
                echo "<td>".$use['Name']."</td>";  
              //  echo "<td>".$use['path1']."</td>";
              //  echo "<td>".$use['path2']."</td>"; 
              //  echo "<td>".$use['path3']."</td>";   ?>
            <td><?php echo $use['path1']; ?> <img src=" <?php echo $use['path1'];  ?>" height="150" width="150">.</td>
            <td><?php echo $use['path2']; ?>  <img src=" <?php echo $use['path2'];  ?>" height="150" width="150">.</td>
            <td> <?php echo $use['path3']; ?> <img src=" <?php echo $use['path2'];  ?>" height="150" width="150">.</td>
             <?php
            }
            }  else {
                echo "   (0 result)";
            }
            ?>
            
            
            </table>  
</div>
 

<script>
function myFunction5() {
  var x = document.getElementById("myDIV5");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

</body>
</html>