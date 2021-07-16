<?php
include("dbconnection.php");
?> 
        <form  method="post" action ="">
        Name: <input type="text" name="name"> <br><br> 
        Road: <input type="text" name="road"> <br><br> 
Area: <input type="text" name="area"> <br><br> 
 City: <input type="text" name="city"> <br><br> 
        Telephone Number: <input type="text" name="num"> <br><br> 
        Expense: <input  name="price"> <br><br> 
 <input type="submit" name="submit1" value="insert">  
        </form>
        
       <form  method="post" action ="5admin.php">   
        <button  >Admin Page</button>
        </form>
        
       
      
      <?php 
 include ("dbconnection.php");
        
        if(isset($_POST["submit1"])){
            
               $query= "INSERT INTO `hotels` (`id`, `Name`, `Road`, `Area`, `City`, `Telephone_number`, `Expense`) VALUES (NULL, '$_POST[name]', '$_POST[road]', '$_POST[area]', '$_POST[city]', '$_POST[num]', '$_POST[price]')";
   //'$_POST[pnum]'
        
           $run_query= mysqli_query($con, $query);
            
            if ($run_query){
    echo "Data has been inserted in the database."; 
                
}else {
    echo "Data could not be inserted. please try again"; 
}   
   
        } mysqli_close($con);
        ?>
         

     