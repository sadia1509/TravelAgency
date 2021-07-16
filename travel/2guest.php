

<form method="post" action = "index.php">
     

<button name="subject" type="submit" value="Home">Home</button> 

</form>


<?php   

include("dbconnection.php");

$query_s= "SELECT * FROM `packages`";

$run_query  = mysqli_query($con, $query_s);  
while($r=mysqli_fetch_assoc($run_query)){   //value="<?php echo $mm; ?>
 
 
 
 <html>
<head>
<style>
div {   
  background-color: lightgrey;
  width: 300px;
  border: 10px solid Black;
  padding: 50px;
  margin: 20px;
}
</style>
</head>
<body>


 
         
<div align="center">  <?php
    
  
     echo "Name: ".$r['Name'] ;  echo "<br>";
    echo  "Duration: ".$r['Duration(Days)']." Days" ;  echo "<br>";
                echo  "Offered place no 1 : ".$r['place1'] ; echo "<br>";
                echo   "Offered place no 2 : ".$r['place2'] ; echo "<br>";
                echo   "Offered place no 3 : ".$r['place3'] ; echo "<br>";
                echo   "Price : ".$r['price'] ; echo "<br>";
    
    echo "<br><br>" ;
    
    
    ?> </div>
     </body> </html>
    
 
    <?php
} 

mysqli_close($con);

?> 






if you want to see more please sign in right now!