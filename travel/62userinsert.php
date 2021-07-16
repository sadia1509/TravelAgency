<?php
include("dbconnection.php");
?> 
        <form  method="post" action ="">
        Fullname: <input type="text" name="fullname"> <br><br>
Email: <input type="text" name="email"> <br><br>
Password: <input type="text" name="password"> <br> <br>
Building_no: <input type="text" name="bn"> <br> <br>
Road: <input type="text" name="road"> <br> <br>
Area: <input type="text" name="area"> <br><br>
City: <input type="text" name="city"> <br> <br>
Phone Number (optional): <input type="text" name="pnum"> <br> <br>
Mobile Number: <input type="text" name="mnum"> <br> <br>
Card Name: <input type="text" name="cname"> <br> <br>
Card Number: <input type="text" name="cnum"> <br> <br>
 <input type="submit" name="submit1" value="insert">  
        </form>
        
       <form  method="post" action ="5admin.php">   
        <button  >Admin Page</button>
        </form>
        
       
      
      <?php 
 include ("dbconnection.php");
        
        if(isset($_POST["submit1"])){
            
               $query= "INSERT INTO `users` (`id`, `Full_name`, `Email`, `password`, `Building_no`, `Road`, `Area`, `City`, `Phone_number`, `Mobile_number`, `selected-id`, `Card_name`, `Card_no`) VALUES (NULL, '$_POST[fullname]', '$_POST[email]', '$_POST[password]', '$_POST[bn]', '$_POST[road]', '$_POST[area]', '$_POST[city]', '$_POST[pnum]', '$_POST[mnum]', NULL, '$_POST[cname]', '$_POST[cnum]')";  
        
           $run_query= mysqli_query($con, $query);
            
            if ($run_query){
    echo "Data has been inserted in the database."; 
                
}else {
    echo "Data could not be inserted. please try again"; 
}   
   
        } mysqli_close($con);
        ?>
         

     