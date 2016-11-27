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


        /****
        Group D
            team id = argentina = 10
                    chile = 11
                    

         Group A
                    USA = 14
                    colombia  = 15
        Group B 
                    Brazil = 20
                    Ecuador = 21
         
         group C
                    maxico = 25
                    jamaica  = 26



        **/

        // connect to the database
       mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("copa_america");

        // get results from database
        $result = mysql_query(("SELECT player_info.player_name, team_info.team_name, player_info.present FROM player_info INNER JOIN team_info  ON player_info.team_id = team_info.team_id  where player_info.team_id='10' ")      )
                or die(mysql_error());  
                
        // display data in table
        echo "<div align='center'><b>join operation</b> </div> <br>";
         
      echo " <div align='center'> "   ;

        echo "<table border='1' cellpadding='10'>";
        echo "<tr> <th width=100>Name</th> <th width=100>team_name</th> <th width=100>present</th>";
 
        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td  >' . $row['player_name'] . '</td>';
                echo '<td >' . $row['team_name'] . '</td>';
                echo '<td >' . $row['present'] . '</td>';
                
                
                
				//echo '<td><a href="edit_stu_info.php?id=' . $row['id'] . '">Edit</a></td>';
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