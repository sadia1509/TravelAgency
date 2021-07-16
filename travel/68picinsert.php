<?php
include("dbconnection.php");
?> 
        <form  method="post" action ="">
        Name: <input type="text" name="name"> <br><br> 
Path no 1: <input style="width: 200px;" type="text" name="p1" placeholder="foldername/picturename.jpg" >    <br><br>
Path no 2: <input style="width: 200px;" type="text" name="p2" placeholder="foldername/picturename.jpg">    <br><br> 
Path no 3: <input style="width: 200px;" type="text" name="p3" placeholder="foldername/picturename.jpg">   <br><br>  
 <input type="submit" name="submit1" value="insert">  
        </form>
        
       <form  method="post" action ="5admin.php">   
        <button  >Admin Page</button>
        </form>
        
      
      
      <?php 
 include ("dbconnection.php");
        
        if(isset($_POST["submit1"])){     
            
               $query= "INSERT INTO `pictures` (`id`, `Name`, `path1`, `path2`, `path3`) VALUES (NULL, '$_POST[name]', '$_POST[p1]', '$_POST[p2]', '$_POST[p3]')";
    
        
           $run_query= mysqli_query($con, $query);
            
            if ($run_query){
    echo "Data has been inserted in the database."; 
                
}else {
    echo "Data could not be inserted. please try again"; 
}   
   
        } mysqli_close($con);
        ?>
         

     