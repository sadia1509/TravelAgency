<?php
include("dbconnection.php");
?> 
        <form  method="post" action ="">
           Fullname: <input type="text" name="fullname"> <br><br>
Email: <input type="text" name="email"> <br><br>
Password: <input type="text" name="password"> <br> <br> 
Phone Number (optional): <input type="text" name="pnum"> <br> <br>
Mobile Number: <input type="text" name="mnum"> <br> <br>
 <input type="submit" name="submit1" value="insert">  
        </form>
        
       <form  method="post" action ="5admin.php">   
        <button  >Admin Page</button>
        </form>
        
       
      
      <?php 
 include ("dbconnection.php");
        
        if(isset($_POST["submit1"])){
            
               $query= "INSERT INTO `admins` (`id`, `Full_name`, `Email`, `password`, `Phone_number`, `Mobile_number` ) VALUES  (NULL, '$_POST[fullname]', '$_POST[email]', '$_POST[password]',  '$_POST[pnum]', '$_POST[mnum]')"; 
        
           $run_query= mysqli_query($con, $query);
            
            if ($run_query){
    echo "Data has been inserted in the database."; 
                
}else {
    echo "Data could not be inserted. please try again"; 
}   
   
        } mysqli_close($con);
        ?>
         

     