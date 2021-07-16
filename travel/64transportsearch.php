 <?php 

if(isset($_POST['search3']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `transports` WHERE CONCAT(`id`, `Type`, `fare`, `Location`) LIKE '%".$valueToSearch."%'";  //, `pic_id`
   //  `selected-id`, `Card_name`, `Card_no`
       $search_result = filterTable3($query);
    
} else{
     $query = "SELECT * FROM `transports`";
       $search_result = filterTable3($query); 
}

// function to connect and execute the query
function filterTable3($query)
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
          
            <input type="submit" name="search3" value="Filter"><br><br>
            

           <table> <tr>
                <th>ID</th>
                 <th>Type</th>  
                 <th>Fare</th>
                 <th>Location</th>  
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
                echo "<td>".$use['Type']."</td>"; 
                echo "<td>".$use['fare']."</td>";
                echo "<td>".$use['Location']."</td>";  
            }
              
            ?>
            </table> 
        </form>
                
<form  method="post" action ="5admin.php">   
        <button  >Admin Page</button>
        </form>
    </body>
</html>



