<?php
include("dbconnection.php");
?> 
        <form  method="post" action ="">
        Type: <input type="text" name="name"> <br><br> 
Fare: <input  name="fare"> <br><br> 
Location: <input type="text" name="location"> <br><br> 
 <input type="submit" name="submit1" value="insert">  
        </form>
        
       <form  method="post" action ="5admin.php">   
        <button  >Admin Page</button>
        </form>
        
       
      
      <?php 
 include ("dbconnection.php");
        
        if(isset($_POST["submit1"])){
            
               $query= "INSERT INTO `transports` (`id`, `Type`, `fare`, `Location`) VALUES (NULL,  '$_POST[name]', '$_POST[fare]', '$_POST[location]')";
   //'$_POST[pnum]'
        
           $run_query= mysqli_query($con, $query);
            
            if ($run_query){
    echo "Data has been inserted in the database."; 
                
}else {
    echo "Data could not be inserted. please try again"; 
}   
   
        } mysqli_close($con);
        ?>
         

     