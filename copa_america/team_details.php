<!DOCTYPE html>
<html>
<head>
	<title>team details</title>
</head>
<body>






<?php



        // connect to the database
       mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("copa_america");

        // get results from database
        $result = mysql_query("SELECT team_info.team_name, coach_info.coach_name  FROM team_info INNER JOIN coach_info  ON
         team_info.coach_id = coach_info.coach_id   ")    


       




                or die(mysql_error());  
                
        // display data in table
        echo "<div align='center'><b>Team details</b> </div> <br>";
         
      echo " <div align='center'> "   ;

        echo "<table border='.2' cellpadding='10'>";
        echo "<tr>  <th width=100>team_name</th> <th width=200>coach name</th>";
 
        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
                
                echo '<td >' . $row['team_name'] . '</td>';
                echo '<td >' . $row['coach_name'] . '</td>';

                echo "</tr>"; 
        } 

        // close table>
        echo "</table>";

        echo "</div>";
?>
<br><br>
<hr>







</body>
</html>