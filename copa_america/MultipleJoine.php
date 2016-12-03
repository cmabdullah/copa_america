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
        $result = mysql_query(


                (
                    "           SELECT tablea.*, tableb.*, tablec.*, tabled.*
                                    FROM tablea
                                        JOIN tableb
                                            ON tableb.aID = tablea.aID
                                        JOIN tablec
                                            ON tablec.cID = tableb.cID
                                        JOIN tabled
                                            ON tabled.dID = tablea.dID
                                    -- WHERE DATE(tablec.date)=date(now())  "
                )      



            )
                or die(mysql_error());  
                
        // display data in table
        echo "<div align='center'><b>join operation</b> </div> <br>";
         
      echo " <div align='center'> "   ;

        echo "<table border='1' cellpadding='10'>";
        echo "<tr> <th width=100>nameA</th> <th width=100>nameB</th> <th width=100>nameC</th><th width=100>nameD</th>";
 
        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td  >' . $row['nameA'] . '</td>';
                echo '<td >' . $row['nameB'] . '</td>';
                echo '<td >' . $row['nameC'] . '</td>';
                echo '<td >' . $row['nameD'] . '</td>';
                
                
                
				//echo '<td><a href="edit_stu_info.php?id=' . $row['id'] . '">Edit</a></td>';
                echo "</tr>"; 
        } 

        // close table>
        echo "</table>";

        echo "</div>";
?>
<br><br>
<hr>





<hr>
<?php

/********
ta = venue_info
tb = schedule_info
tc = round_info
td  = group_t
****/

       mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("copa_america");

        // get results from database
        $result = mysql_query(


                (
                    "           SELECT venue_info.*, schedule_info.*, round_info.*, group_t.*,team_info.*
                                    FROM venue_info
                                        JOIN schedule_info
                                            ON schedule_info.venue_id = venue_info.venue_id
                                        JOIN round_info
                                            ON round_info.round_id = schedule_info.round_id
                                        JOIN group_t
                                            ON group_t.group_name = round_info.group_name
                                        JOIN team_info
                                            ON team_info.team_id = group_t.team_id  
                                            WHERE schedule_info.schedule_id = '1110000'  
                                    -- WHERE DATE(tablec.date)=date(now())  "
                )      



            )
                or die(mysql_error());  
                
        // display data in table
        echo "<div align='center'><h2>Group A</h2> </div> <br>";
         
      echo " <div align='center'> "   ;

        echo "<table border='1' cellpadding='10'>";
        echo "<tr> 
        <th width=100>venue name</th> 
        <th width=100>  schedule id</th> 
        <th width=100>round name</th>
        <th width=100>group name</th>
        <th width=100>team id</th>
        <th width=100>team name</th>
        <th width=100>location</th>
        <th width=100>date</th>
        <th width=100>Goal</th>";
 
        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td  >' . $row['venue_name'] . '</td>';
                echo '<td >' . $row['schedule_id'] . '</td>';
                echo '<td >' . $row['round_name'] . '</td>';
                echo '<td >' . $row['group_name'] .  '</td>';
                echo '<td >' . $row['team_id'] . '</td>';
                echo '<td >' . $row['team_name'] . '</td>';
                echo '<td >' . $row['location'] . '</td>';
                echo '<td >' . $row['date'] . '</td>';
                
                
                //echo '<td><a href="edit_stu_info.php?id=' . $row['id'] . '">Edit</a></td>';
                echo "</tr>"; 
        } 

        // close table>
        echo "</table>";

        echo "</div>";
?>
<br><br>
<hr>








<hr>
<?php

/********
ta = venue_info
tb = schedule_info
tc = round_info
td  = group_t
****/

       mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("copa_america");

        // get results from database
        $result = mysql_query(
                (
                    "           SELECT team_info .*, group_t  .*, round_info.*, schedule_info.*,venue_info.*

                                    FROM team_info
                                        JOIN group_t
                                            ON group_t.team_id = team_info.team_id
                                        JOIN round_info
                                            ON round_info.group_name = group_t.group_name
                                        JOIN schedule_info
                                            ON schedule_info.round_id = round_info.round_id
                                        JOIN venue_info
                                            ON venue_info.venue_id = schedule_info.venue_id  
                                            WHERE schedule_info.schedule_id = '111222'  
                                    -- WHERE DATE(tablec.date)=date(now())  "
                )

            )
                or die(mysql_error());  
                
        // display data in table
        echo "<div align='center'><h2>Group B</h2> </div> <br>";
         
      echo " <div align='center'> "   ;

        echo "<table border='1' cellpadding='10'>";
        echo "<tr> 
        <th width=100>venue name</th> 
        <th width=100>  schedule id</th> 
        <th width=100>round name</th>
        <th width=100>group name</th>
        <th width=100>team id</th>
        <th width=100>team name</th>
        <th width=100>location</th>
        <th width=100>date</th>
        <th width=100>Goal</th>";
 
        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td  >' . $row['venue_name'] . '</td>';
                echo '<td >' . $row['schedule_id'] . '</td>';
                echo '<td >' . $row['round_name'] . '</td>';
                echo '<td >' . $row['group_name'] .  '</td>';
                echo '<td >' . $row['team_id'] . '</td>';
                echo '<td >' . $row['team_name'] . '</td>';
                echo '<td >' . $row['location'] . '</td>';
                echo '<td >' . $row['date'] . '</td>';
                
                
                //echo '<td><a href="edit_stu_info.php?id=' . $row['id'] . '">Edit</a></td>';
                echo "</tr>"; 
        } 

        // close table>
        echo "</table>";

        echo "</div>";
?>
<br><br>
<hr>










<hr>
<?php

/********
ta = venue_info
tb = schedule_info
tc = round_info
td  = group_t
****/

       mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("copa_america");

        // get results from database
        $result = mysql_query(
                (
                    "           SELECT team_info .*, group_t  .*, round_info.*, schedule_info.*,venue_info.*

                                    FROM team_info
                                        JOIN group_t
                                            ON group_t.team_id = team_info.team_id
                                        JOIN round_info
                                            ON round_info.group_name = group_t.group_name
                                        JOIN schedule_info
                                            ON schedule_info.round_id = round_info.round_id
                                        JOIN venue_info
                                            ON venue_info.venue_id = schedule_info.venue_id  
                                            WHERE schedule_info.schedule_id = '333444'  
                                    -- WHERE DATE(tablec.date)=date(now())  "
                )            )
                or die(mysql_error());  
                
        // display data in table
        echo "<div align='center'><h2>Group C</h2> </div> <br>";
         
      echo " <div align='center'> "   ;

        echo "<table border='1' cellpadding='10'>";
        echo "<tr> 
        <th width=100>venue name</th> 
        <th width=100>  schedule id</th> 
        <th width=100>round name</th>
        <th width=100>group name</th>
        <th width=100>team id</th>
        <th width=100>team name</th>
        <th width=100>location</th>
        <th width=100>date</th>
        <th width=100>Goal</th>";
 
        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td  >' . $row['venue_name'] . '</td>';
                echo '<td >' . $row['schedule_id'] . '</td>';
                echo '<td >' . $row['round_name'] . '</td>';
                echo '<td >' . $row['group_name'] .  '</td>';
                echo '<td >' . $row['team_id'] . '</td>';
                echo '<td >' . $row['team_name'] . '</td>';
                echo '<td >' . $row['location'] . '</td>';
                echo '<td >' . $row['date'] . '</td>';
                
                
                //echo '<td><a href="edit_stu_info.php?id=' . $row['id'] . '">Edit</a></td>';
                echo "</tr>"; 
        } 

        // close table>
        echo "</table>";

        echo "</div>";
?>
<br><br>
<hr>







<hr>
<?php

/********
ta = venue_info
tb = schedule_info
tc = round_info
td  = group_t
****/

       mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("copa_america");

        // get results from database
        $result = mysql_query(
                (
                    "           SELECT team_info .*, group_t  .*, round_info.*, schedule_info.*,venue_info.*

                                    FROM team_info
                                        JOIN group_t
                                            ON group_t.team_id = team_info.team_id
                                        JOIN round_info
                                            ON round_info.group_name = group_t.group_name
                                        JOIN schedule_info
                                            ON schedule_info.round_id = round_info.round_id
                                        JOIN venue_info
                                            ON venue_info.venue_id = schedule_info.venue_id  
                                            WHERE schedule_info.schedule_id = '666777'  
                                    -- WHERE DATE(tablec.date)=date(now())  "
                )            )
                or die(mysql_error());  
                
        // display data in table
        echo "<div align='center'><h2>Group D</h2> </div> <br>";
         
      echo " <div align='center'> "   ;

        echo "<table border='1' cellpadding='10'>";
        echo "<tr> 
        <th width=100>venue name</th> 
        <th width=100>  schedule id</th> 
        <th width=100>round name</th>
        <th width=100>group name</th>
        <th width=100>team id</th>
        <th width=100>team name</th>
        <th width=100>location</th>
        <th width=100>date</th>
        <th width=100>Goal</th>";
 
        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td  >' . $row['venue_name'] . '</td>';
                echo '<td >' . $row['schedule_id'] . '</td>';
                echo '<td >' . $row['round_name'] . '</td>';
                echo '<td >' . $row['group_name'] .  '</td>';
                echo '<td >' . $row['team_id'] . '</td>';
                echo '<td >' . $row['team_name'] . '</td>';
                echo '<td >' . $row['location'] . '</td>';
                echo '<td >' . $row['date'] . '</td>';
                
                
                //echo '<td><a href="edit_stu_info.php?id=' . $row['id'] . '">Edit</a></td>';
                echo "</tr>"; 
        } 

        // close table>
        echo "</table>";

        echo "</div>";
?>
<br><br>
<hr>















<hr>
<?php

/********
ta = venue_info
tb = schedule_info
tc = round_info
td  = group_t
****/

       mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("copa_america");

      //  get results from database
        $result = mysql_query(
                (
                    "           SELECT  venue_info.*,schedule_info.*, round_info.*

                                    FROM venue_info
                                        JOIN schedule_info
                                            ON schedule_info.venue_id = venue_info.venue_id
                                        JOIN round_info
                                            ON round_info.round_id = schedule_info.round_id
                                        
                                           WHERE schedule_info.schedule_id = '20002'  
                                    -- WHERE DATE(tablec.date)=date(now())  "
                )            )
                or die(mysql_error());  


          

                
        // display data in table
        echo "<div align='center'><h2>Semi final</h2> </div> <br>";
         
      echo " <div align='center'> "   ;

        echo "<table border='1' cellpadding='10'>";
        echo "<tr> 
        <th width=100>venue name</th> 
        <th width=100>location</th>
        
        <th width=100>round name</th>
        <th width=100>participants_name</th>
        <th width=100>schedule id</th>
        
        <th width=100>date</th>
        <th width=100>Goal</th>";
 
        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td  >' . $row['venue_name'] . '</td>';
                echo '<td >' . $row['location'] . '</td>';
                echo '<td >' . $row['round_name'] . '</td>';
                echo '<td >' . $row['participants_name'] .  '</td>';
                echo '<td >' . $row['schedule_id'] . '</td>';
     //           echo '<td >' . $row['team_name'] . '</td>';
                echo '<td >' . $row['date'] . '</td>';
             //   echo '<td >' . $row['Goal'] . '</td>';
                
                
                //echo '<td><a href="edit_stu_info.php?id=' . $row['id'] . '">Edit</a></td>';
                echo "</tr>"; 
        } 

        // close table>
        echo "</table>";

        echo "</div>";
?>
<br><br>

<?php

/********
ta = venue_info
tb = schedule_info
tc = round_info
td  = group_t
****/

       mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("copa_america");

      //  get results from database
        $result = mysql_query(
                (
                    "           SELECT  venue_info.*,schedule_info.*, round_info.*

                                    FROM venue_info
                                        JOIN schedule_info
                                            ON schedule_info.venue_id = venue_info.venue_id
                                        JOIN round_info
                                            ON round_info.round_id = schedule_info.round_id
                                        
                                           WHERE schedule_info.schedule_id = '20003'  
                                    -- WHERE DATE(tablec.date)=date(now())  "
                )            )
                or die(mysql_error());  


          

                
        // display data in table
     ///   echo "<div align='center'><h2>Semi final</h2> </div> <br>";
         
      echo " <div align='center'> "   ;

        echo "<table border='1' cellpadding='10'>";
        echo "<tr> 
        <th width=100>venue name</th> 
        <th width=100>location</th>
        
        <th width=100>round name</th>
        <th width=100>participants_name</th>
        <th width=100>schedule id</th>
        
        <th width=100>date</th>
        <th width=100>Goal</th>";
 
        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td  >' . $row['venue_name'] . '</td>';
                echo '<td >' . $row['location'] . '</td>';
                echo '<td >' . $row['round_name'] . '</td>';
                echo '<td >' . $row['participants_name'] .  '</td>';
                echo '<td >' . $row['schedule_id'] . '</td>';
     //           echo '<td >' . $row['team_name'] . '</td>';
                echo '<td >' . $row['date'] . '</td>';
             //   echo '<td >' . $row['Goal'] . '</td>';
                
                
                //echo '<td><a href="edit_stu_info.php?id=' . $row['id'] . '">Edit</a></td>';
                echo "</tr>"; 
        } 

        // close table>
        echo "</table>";

        echo "</div>";
?>
<br><br>
<hr>





























<hr>
<?php

/********
ta = venue_info
tb = schedule_info
tc = round_info
td  = group_t
****/

       mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("copa_america");

      //  get results from database
        $result = mysql_query(
                (
                    "           SELECT  venue_info.*,schedule_info.*, round_info.*

                                    FROM venue_info
                                        JOIN schedule_info
                                            ON schedule_info.venue_id = venue_info.venue_id
                                        JOIN round_info
                                            ON round_info.round_id = schedule_info.round_id
                                        
                                           WHERE schedule_info.schedule_id = '20009'  
                                    -- WHERE DATE(tablec.date)=date(now())  "
                )            )
                or die(mysql_error());  


          

                
        // display data in table
        echo "<div align='center'><h2>Final</h2> </div> <br>";
         
      echo " <div align='center'> "   ;

        echo "<table border='1' cellpadding='10'>";
        echo "<tr> 
        <th width=100>venue name</th> 
        <th width=100>location</th>
        
        <th width=100>round name</th>
        <th width=400>participants_name</th>
        <th width=100>schedule id</th>
        
        <th width=100>date</th>
        <th width=100>Goal</th>";
 
        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td  >' . $row['venue_name'] . '</td>';
                echo '<td >' . $row['location'] . '</td>';
                echo '<td >' . $row['round_name'] . '</td>';
                echo '<td >' . $row['participants_name'] .  '</td>';
                echo '<td >' . $row['schedule_id'] . '</td>';
     //           echo '<td >' . $row['team_name'] . '</td>';
                echo '<td >' . $row['date'] . '</td>';
             //   echo '<td >' . $row['Goal'] . '</td>';
                
                
                //echo '<td><a href="edit_stu_info.php?id=' . $row['id'] . '">Edit</a></td>';
                echo "</tr>"; 
        } 

        // close table>
        echo "</table>";

        echo "</div>";
?>
<br><br>


<br><br>
<hr>


























</body>
</html> 