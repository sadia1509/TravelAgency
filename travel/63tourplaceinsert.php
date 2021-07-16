<?php
include("dbconnection.php");
?> 
        <form  method="post" action ="">
        Name: <input type="text" name="name"> <br><br> 
Area: <input type="text" name="area"> <br><br>
City: <input type="text" name="city"> <br> <br>  
Price: <input   name="price"> <br> <br>  
Picture ID: <input   name="pnum"> <br> <br> 
 <input type="submit" name="submit1" value="insert">  
        </form>
        
       <form  method="post" action ="5admin.php">   
        <button  >Admin Page</button>
        </form>
        
       
      
      <?php 
 include ("dbconnection.php");
        
        if(isset($_POST["submit1"])){
            
               $query= "INSERT INTO `tourist_places` (`id`, `Name`, `Area`, `City`, `Price`, `pic_id`) VALUES (NULL, '$_POST[name]', '$_POST[area]', '$_POST[city]', '$_POST[price]', NULL)";   //'$_POST[pnum]'
        
           $run_query= mysqli_query($con, $query);
            
            if ($run_query){
    echo "Data has been inserted in the database."; 
                
}else {
    echo "Data could not be inserted. please try again"; 
}   
   
        } mysqli_close($con);
        ?>
         

     