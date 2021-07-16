 <?php 

if(isset($_POST['search5']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // concat mysql function
    $query = "SELECT * FROM `packages` WHERE CONCAT(`Code`, `Name`, `Duration(Days)`, `place1`, `place2`, `place3`, `price`) LIKE '%".$valueToSearch."%'";  //, `pic_id`
   //  `selected-id`, `Card_name`, `Card_no`
       $search_result = filterTable5($query);
    
} else{
     $query = "SELECT * FROM `packages`";
       $search_result = filterTable5($query); 
}

// function to connect & execute the query
function filterTable5($query)
{  include("dbconnection.php"); 
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
          
            <input type="submit" name="search5" value="Filter"><br><br>
            

           <table> <tr>
                <th>Code</th>
                 <th>Name</th> 
                 <th>Duration(Days)</th> 
                 <th>Place no 1</th>
                 <th>Place no 2</th> 
                 <th>Place no 3</th>
                  <th>Package Expense</th>  
                  <th>Picture id</th>

      <!-- populate table from mysql database -->
             <?php    
                 $rowcount=mysqli_num_rows($search_result);
               if($rowcount==0||$rowcount==1) {echo $rowcount." result found.";}
                else {echo $rowcount." results found."; }
                     ?>
                 
                  <?php 
            while ($use=mysqli_fetch_assoc($search_result)){
               echo "<tr>"; 
                echo "<td>".$use['Code']."</td>";
                echo "<td>".$use['Name']."</td>"; 
                echo "<td>".$use['Duration(Days)']."</td>";
                echo "<td>".$use['place1']."</td>";
                echo "<td>".$use['place2']."</td>"; 
                echo "<td>".$use['place3']."</td>"; 
                echo "<td>".$use['price']."</td>";
                echo "<td>".$use['pic_id']."</td>";
            }
              
            ?>
            </table> 
        </form>
                
<form  method="post" action ="5admin.php">   
        <button  >Admin Page</button>
        </form>
    </body>
</html>



