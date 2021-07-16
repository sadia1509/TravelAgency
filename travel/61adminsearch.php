 <?php 

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `admins` WHERE CONCAT(`id`, `Full_name`, `Email`, `password`, `Phone_number`, `Mobile_number`) LIKE '%".$valueToSearch."%'"; 
       $search_result = filterTable($query);
} else{
     $query = "SELECT * FROM `admins`";
       $search_result = filterTable($query); 
    

}

// function to connect and execute the query
function filterTable($query)
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
          
            <input type="submit" name="search" value="Filter"><br><br>
            

            
            <table> <tr>
                <th>ID</th>
                 <th>Full Name</th>
                <th>Email</th>
                 <th>Password</th> 
                  <th>Mobile Number</th> 
                 <th>Phone Number</th>
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
                echo "<td>".$use['Mobile_number']."</td>";
                 echo "<td>".$use['Phone_number']."</td>"; 
            }
              
            ?>
            </table> 
        </form>
                
<form  method="post" action ="5admin.php">   
        <button  >Admin Page</button>
        </form>
    </body>
</html>



