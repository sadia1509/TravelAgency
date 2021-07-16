 <?php 

if(isset($_POST['search1']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `users` WHERE CONCAT(`id`, `Full_name`, `Email`, `password`, `Building_no`, `Road`, `Area`, `City`, `Phone_number`, `Mobile_number`) LIKE '%".$valueToSearch."%'"; 
   //  `selected-id`, `Card_name`, `Card_no`
       $search_result = filterTable1($query);
    
} else{
     $query = "SELECT * FROM `users`";
       $search_result = filterTable1($query); 
}

// function to connect and execute the query
function filterTable1($query)
{  include("dbconnection.php");
    //$connect = mysqli_connect("localhost", "root", "", "test_db");
    $filter_Result = mysqli_query($con, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
          
            <input type="submit" name="search1" value="Filter"><br><br>
            

           <table> <tr>
                <th>ID</th>
                 <th>Full Name</th>
                <th>Email</th>
                 <th>Password</th> 
                 <th>Building no</th>
                 <th>Road</th> 
                 <th>Area</th>
                 <th>City</th> 
                  <th>Mobile Number</th> 
                 <th>Phone Number</th>
                 <th>Card Name</th>
                 <th>Card Number</th> 
                 <th>Selection id</th> 
                </tr>

      <!-- populate table from mysql database -->
             <?php    
                 $rowcount=mysqli_num_rows($search_result);
               if($rowcount==0||$rowcount==1) {echo $rowcount." result found.";}
                else {echo $rowcount." results found."; }
                     ?>
                 
                  <?php 
            while ($use=mysqli_fetch_assoc($search_result)){
               echo "<tr>"; 
                echo "<td>".$use['id']."</td>";
                echo "<td>".$use['Full_name']."</td>";
                echo "<td>".$use['Email']."</td>";
                echo "<td>".$use['password']."</td>"; 
                echo "<td>".$use['Building_no']."</td>";
                echo "<td>".$use['Road']."</td>";
                echo "<td>".$use['Area']."</td>";
                echo "<td>".$use['City']."</td>"; 
                echo "<td>".$use['Mobile_number']."</td>";
                 echo "<td>".$use['Phone_number']."</td>";
                echo "<td>".$use['Card_name']."</td>";
                echo "<td>".$use['Card_no']."</td>";
                echo "<td>".$use['selected-id']."</td>";
            }
              
            ?>
            </table> 
        </form>
                
<form  method="post" action ="5admin.php">   
        <button  >Admin Page</button>
        </form>
    </body>
</html>



