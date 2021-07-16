<?php
include("dbconnection.php");
?> 
        <form  method="post" action ="">
        Name: <input type="text" name="name"> <br><br> 
        Duration(Days): <input  name="days"> <br><br> 
Place no 1: <input type="text" name="p1"> <br><br>
Place no 2: <input type="text" name="p2"> <br><br> 
Place no 3: <input type="text" name="p3"> <br><br>   
       Package expense: <input  name="price"> <br><br> 
       Picture id: <input  name="id"> <br><br> 
 <input type="submit" name="submit1" value="insert">  
        </form>
        
       <form  method="post" action ="5admin.php">   
        <button  >Admin Page</button>
        </form>
        
      
      
      <?php 
 include ("dbconnection.php");
        
        if(isset($_POST["submit1"])){
            
               $query= "INSERT INTO `packages` (`Code`, `Name`, `Duration(Days)`, `place1`, `place2`, `place3`, `price`, `pic_id`) VALUES (NULL, '$_POST[name]', '$_POST[days]', '$_POST[p1]', '$_POST[p2]', '$_POST[p3]', '$_POST[price]', NULL)";
   //'$_POST[id]'
        
           $run_query= mysqli_query($con, $query);
            
            if ($run_query){
    echo "Data has been inserted in the database."; 
                
}else {
    echo "Data could not be inserted. please try again"; 
}   
   
        } mysqli_close($con);
        ?>
         

     