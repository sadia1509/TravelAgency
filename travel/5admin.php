<form method="post" action = "index.php">
     

<button name="subject" type="submit" value="Home">Home</button> 

</form>
 


<?php  
//admins   
print "<strong>Admins</strong>";  
include("6admintable.php");
include("60admin.php");
echo "<br><br><br>";
//users 
print "<strong>Users</strong>";  
include("6usertable.php");
include("60user.php");
echo "<br><br><br>";
//Tourist Places  
print "<strong>Tourist Places</strong>";  
include("6tourptable.php");
include("60turistplace.php");
echo "<br><br><br>";
 //Transports
print "<strong>Transports</strong>";  
include("6transporttable.php");
include("60transport.php");
echo "<br><br><br>";
 //hotels
print "<strong>Hotels</strong>";  
include("6hoteltable.php");
include("60hotel.php");
echo "<br><br><br>";
 //Packages 
print "<strong>Packages</strong>";  
include("6packagetable.php");
include("60package.php");
echo "<br><br><br>";
//Pictures 
print "<strong>Pictures</strong>";  
include("6picturetbale.php");
include("60picture.php");
echo "<br><br><br>";
//Payment systems 
print "<strong>Payment Systems</strong>";  
include("6payseltable.php");
include("60paymentsys.php");
echo "<br><br><br>";
//multiplaces
print "<strong>Multiplaces</strong>";  
include("6multiplacestable.php");
//include("60paymentsys.php");
echo "<br><br><br>";
//User's selections 
print "<strong>Users' Selections</strong>";  
include("6selectiontable.php"); 
echo "<br><br><br>";
?>