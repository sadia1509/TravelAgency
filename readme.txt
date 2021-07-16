*******stuff that you need to run the project*******

-php installed***  
(path needs to be set or specified in the computer)
help link: https://www.edureka.co/blog/how-to-install-php-on-windows/

-xampp installed*** 
(if mySQL is installed already, the port
for sql will be shared and it will generate error in running
the project. Therefore, ports need to be readdressed in 
xampp to avoid this conflict)
*** changed port address should be grater than 1024 ***
help link: https://www.ionos.com/digitalguide/server/tools/xampp-tutorial-create-your-own-local-test-server/


*******running process********

-need to keep the project folder in htdocs which is in xampp folder that is installed.
 Something like this .....  drive:.....\Xampp\htdocs
-need to uplodad the sql file in the phpMyAdmin sql server. 
    -need to create a database named "travel" in this case and by usuing imort buttion from 
     the upper bar, upload the travel.sql.zip file. you may need to convert the sql file into 
     zip in order to do that. Then press go.

-open xampp and click start button for 'Apache' and 'MySQL'
-click admin button for the dashboard if you need. (optional)
-go to any browser and type localhost/travel 
 (syntex---> localhost/{project_folder_name})
 ***** if the port address is changed for xampp, then the syntex should be 
	localhost:changed_port_address/project_folder_name
	for example: localhost:7888/travel


********ending the process********
-simply cross the tab of the browser where the project is opened.
-click stop buttons for apache and mySQL in xampp.


-----------------------(All done)------------------------


