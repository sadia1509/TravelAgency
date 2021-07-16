 <?php 

if(isset($_POST['search6']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // concat mysql function
    $query = "SELECT * FROM `pictures` WHERE CONCAT(`id`, `Name`, `path1`, `path2`, `path3`) LIKE '%".$valueToSearch."%'";  //, `pic_id`
   //  `selected-id`, `Card_name`, `Card_no`
       $search_result = filterTable6($query);
    
} else{
     $query = "SELECT * FROM `pictures`";
       $search_result = filterTable6($query); 
}

// function to connect & execute the query
function filterTable6($query)
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
          
            <input type="submit" name="search6" value="Filter"><br><br>
            

           <table width="500"> <tr>
               <th>ID</th>
                 <th>Name</th> 
                 <th>Path & image no 1</th> 
                 <th>Path & image no 2</th>
                 <th>Path & image no 3</th>   

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
                echo "<td>".$use['Name']."</td>";     ?>
            <td><?php echo $use['path1']; ?> <img src=" <?php echo $use['path1'];  ?>" height="150" width="150">.</td>
            <td><?php echo $use['path2']; ?>  <img src=" <?php echo $use['path2'];  ?>" height="150" width="150">.</td>
            <td> <?php echo $use['path3']; ?> <img src=" <?php echo $use['path2'];  ?>" height="150" width="150">.</td>
             <?php 
            }
              
            ?>
            </table> 
        </form>
                
<form  method="post" action ="5admin.php">   
        <button  >Admin Page</button>
        </form>
    </body>
</html>



