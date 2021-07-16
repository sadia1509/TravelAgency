<?php
include("dbconnection.php");
?> 
        <form  method="post" action ="">
           The VALUE you want to DELETE: <input type="text" name="d"> <br><br>
          Select The Attribute of that VALUE:  
             
          <?php 
$sql="SELECT distinct COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = N'admins'";
$result=mysqli_query($con, $sql);

echo "<select name='a'>"; 
while($row=mysqli_fetch_assoc($result)){ 
     echo  "<option value='" . $row['COLUMN_NAME'] . "'>" . $row['COLUMN_NAME'] . "</option>"; 
} 
echo "</select>";

?>
           
 <br><br>
 <input type="submit" name="submit2" value="delete">  
        </form>
        
       <form  method="post" action ="5admin.php">   
        <button  >Admin Page</button>
        </form>
        
       
      
      <?php  
        
        if(isset($_POST["submit2"])){
            
               $query= "DELETE FROM `admins` WHERE `admins`.`$_POST[a]` = '$_POST[d]' "; 
        
           $run_query= mysqli_query($con, $query);
            
            if (mysqli_affected_rows($con) > 0){
    echo "Data has been deleted from the database."; 
                
}else {
    echo "Data could not be deleted. please try again"; 
}   
   
        }  mysqli_close($con);
        ?>
         

     