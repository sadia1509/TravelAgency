 <?php 

if(isset($_POST['search4']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `hotels` WHERE CONCAT(`id`, `Name`, `Road`, `Area`, `City`, `Telephone_number`, `Expense`) LIKE '%".$valueToSearch."%'";  //, `pic_id`
   //  `selected-id`, `Card_name`, `Card_no`
       $search_result = filterTable4($query);
    
} else{
     $query = "SELECT * FROM `hotels`";
       $search_result = filterTable4($query); 
}

// function to connect and execute the query
function filterTable4($query)
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
          
            <input type="submit" name="search4" value="Filter"><br><br>
            

           <table> <tr>
                 <th>ID</th>
                 <th>Name</th> 
                 <th>Road</th> 
                 <th>Area</th>
                 <th>City</th> 
                 <th>Telephone Number</th>
               <th>Expense</th>  </tr>

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
                echo "<td>".$use['Name']."</td>"; 
                echo "<td>".$use['Road']."</td>";
                echo "<td>".$use['Area']."</td>";
                echo "<td>".$use['City']."</td>"; 
                echo "<td>".$use['Telephone_number']."</td>"; 
                echo "<td>".$use['Expense']."</td>";
            }
              
            ?>
            </table> 
        </form>
                
<form  method="post" action ="5admin.php">   
        <button  >Admin Page</button>
        </form>
    </body>
</html>



