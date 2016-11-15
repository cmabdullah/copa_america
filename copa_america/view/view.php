<html>
<head>
        <title>View Records</title>
		
</head>
<body>
<?php

/* 
        VIEW.PHP
        Displays all data from 'players' table
*/

        // connect to the database
       mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("copa_america");

        // get results from database
        $result = mysql_query("SELECT * FROM beta_test") 
                or die(mysql_error());  
                
        // display data in table
        echo "<p><b>Showing All Information</b> </p>";
        
        echo "<table border='1' cellpadding='10'>";
        echo "<tr> <th>Name</th> <th>ID</th>";

        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td>' . $row['name'] . '</td>';
                echo '<td>' . $row['id'] . '</td>';
				
                
                
                
				//echo '<td><a href="edit_stu_info.php?id=' . $row['id'] . '">Edit</a></td>';
                echo "</tr>"; 
        } 

        // close table>
        echo "</table>";
?>


</body>
</html> 