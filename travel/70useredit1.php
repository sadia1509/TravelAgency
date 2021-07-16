 <?php session_start();
 include ("dbconnection.php");
         
        if(isset($_POST["submit31"])){
            $a=$_POST['eman'];
            $b=$_POST['pass'];
            $c=$_POST['fn'];
            $d=$_POST['bn'];  
            
              $aa=$_POST['eman1'];
            $ba=$_POST['pass1'];
            $ca=$_POST['fn1'];
            $da=$_POST['sa1']; 
            $daa=$_POST['sa2']; $ida=$_SESSION['id'];
              
            $sql="UPDATE `users` SET `Full_name` = '$c', `Email` = '$a', `password` = '$b', `Building_no` = '$d', `Road` = '$aa', `Area` = '$ba', `City` = '$ca', `Phone_number` = '$da', `Mobile_number` = '$daa' WHERE `users`.`id` = $ida";
            
         //   echo $sql; echo "<br>";
            
           $run_query= mysqli_query($con, $sql);
            
            if (mysqli_affected_rows($con) > 0){ 
    echo "Data has been updated in the database."; 
                
}else {
    echo "Data could not be updated. please try again"; 
}   
   
        }
mysqli_close($con);
        ?>
       
          
             <a href="70logout.php">logout</a>    

     