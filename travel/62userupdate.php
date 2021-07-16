<?php
include("dbconnection.php");  
?> 
        <form  method="post" action ="">
           The old VALUE or that tuple related value : <input type="text" name="o"> <br><br>
          Select The Attribute of the old VALUE:  
             
          <?php 
$sql="SELECT distinct COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = N'users'";
$result=mysqli_query($con, $sql);

echo "<select name='a'>"; 
while($row=mysqli_fetch_assoc($result)){ 
     echo  "<option value='" . $row['COLUMN_NAME'] . "'>" . $row['COLUMN_NAME'] . "</option>"; 
} 
echo "</select>";

?>
          <br><br>
         The NEW value: <input type="text" name="n"> <br><br>
            Select The Attribute of the new VALUE:  
          
                    <?php 
$sql="SELECT distinct COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = N'users'";
$result=mysqli_query($con, $sql);

echo "<select name='b'>"; 
while($row=mysqli_fetch_assoc($result)){ 
     echo  "<option value='" . $row['COLUMN_NAME'] . "'>" . $row['COLUMN_NAME'] . "</option>"; 
} 
echo "</select>";

?>
          
          
          
           
 <br><br>
 <input type="submit" name="submit3" value="update">  
        </form>
        
       <form  method="post" action ="5admin.php">   
        <button  >Admin Page</button>
        </form>
        
       
      
      <?php 
 include ("dbconnection.php");
        
        if(isset($_POST["submit3"])){
             
            $query= "UPDATE `users` SET `$_POST[b]` = '$_POST[n]' WHERE `users`.`$_POST[a]` = '$_POST[o]'";
        
           $run_query= mysqli_query($con, $query);
            
            if (mysqli_affected_rows($con) > 0){
    echo "Data has been updated in the database."; 
                
}else {
    echo "Data could not be updated. please try again"; 
}   
   
        }
mysqli_close($con);
        ?>
         

     