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
        $result = mysql_query("SELECT * FROM player_info where team_id='10' ") 
                or die(mysql_error());  
                
        // display data in table
        echo "<div align='center'><b>Argentain player info</b> </div> <br>";
         
      echo " <div align='center'> "   ;

        echo "<table border='1' cellpadding='10'>";
        echo "<tr> <th width=100>Name</th> <th width=100>Jursy No</th> <th width=100>age</th>  <th width=100>present</th>";

        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td>' . $row['player_name'] . '</td>';
                echo '<td>' . $row['jursy_number'] . '</td>';

				echo '<td>' . $row['age'] . '</td>';
                echo '<td>' . $row['present'] . '</td>';
                
                
                
				//echo '<td><a href="edit_stu_info.php?id=' . $row['id'] . '">Edit</a></td>';
                echo "</tr>"; 

        } 

        // close table>
        echo "</table>";

        echo "</div>";

      echo " <div align='center'> "   ;

        echo "<table border='0' cellpadding='10'>";
        echo "	 <tr>   <th ></th> 
       			 		<th ></th> 
        		 		<th ></th>";


        		 				echo "<tr>";
                echo '<td  >' . '<a href="#insert.php"> ' . 'Insert ' . ' </a> ' . '</td>';
                echo '<td >' .'<a href="#insert.php"> ' . 'Delete ' . ' </a> '. '</td>';
                echo '<td >' . '<a href="#insert.php"> ' . 'Update ' . ' </a> '. '</td>';


                echo "</tr>"; 
       
        echo "</table>";

        echo "</div>";




?>
<br><br>
<hr>
<?php
//brasil = 20
       mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("copa_america");
        $result = mysql_query("SELECT * FROM player_info where team_id='20' ") 
                or die(mysql_error());  
        echo "<p><b>Brazilian player info</b> </p>";   
      echo " <div align='center'> "   ;
        echo "<table border='1' cellpadding='10'>";
        echo "<tr> <th>Name</th> <th>Jursy No</th> <th>age</th>  <th>present</th>";
        while($row = mysql_fetch_array( $result )) {
                echo "<tr>";
                echo '<td>' . $row['player_name'] . '</td>';
                echo '<td>' . $row['jursy_number'] . '</td>';
                echo '<td>' . $row['age'] . '</td>';
                echo '<td>' . $row['present'] . '</td>';
                
                echo "</tr>"; 
        } 
        // close table>
        echo "</table>";
        echo "</div>";
?>
<br><br>
<hr>

<?php
//chile = 11
       mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("copa_america");
        $result = mysql_query("SELECT * FROM player_info where team_id='11' ") 
                or die(mysql_error());  
        echo "<p><b>Chili's player info</b> </p>";   
      echo " <div align='center'> "   ;
        echo "<table border='1' cellpadding='10'>";
        echo "<tr> <th>Name</th> <th>Jursy No</th> <th>age</th>  <th>present</th>";
        while($row = mysql_fetch_array( $result )) {
                echo "<tr>";
                echo '<td>' . $row['player_name'] . '</td>';
                echo '<td>' . $row['jursy_number'] . '</td>';
                echo '<td>' . $row['age'] . '</td>';
                echo '<td>' . $row['present'] . '</td>';
                
                echo "</tr>"; 
        } 
        // close table>
        echo "</table>";
        echo "</div>";
?>
<br><br>
<hr>

<?php
//Ecuador = 21
       mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("copa_america");
        $result = mysql_query("SELECT * FROM player_info where team_id='21' ") 
                or die(mysql_error());  
        echo "<p><b>Ecuadors player info</b> </p>";   
      echo " <div align='center'> "   ;
        echo "<table border='1' cellpadding='10'>";
        echo "<tr> <th>Name</th> <th>Jursy No</th> <th>age</th>  <th>present</th>";
        while($row = mysql_fetch_array( $result )) {
                echo "<tr>";
                echo '<td>' . $row['player_name'] . '</td>';
                echo '<td>' . $row['jursy_number'] . '</td>';
                echo '<td>' . $row['age'] . '</td>';
                echo '<td>' . $row['present'] . '</td>';
                
                echo "</tr>"; 
        } 
        // close table>
        echo "</table>";
        echo "</div>";
?>
<br><br>
<hr>




<?php
//USA = 14
       mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("copa_america");
        $result = mysql_query("SELECT * FROM player_info where team_id='14' ") 
                or die(mysql_error());  
        echo "<p><b>USA player info</b> </p>";   
      echo " <div align='center'> "   ;
        echo "<table border='1' cellpadding='10'>";
        echo "<tr> <th>Name</th> <th>Jursy No</th> <th>age</th>  <th>present</th>";
        while($row = mysql_fetch_array( $result )) {
                echo "<tr>";
                echo '<td>' . $row['player_name'] . '</td>';
                echo '<td>' . $row['jursy_number'] . '</td>';
                echo '<td>' . $row['age'] . '</td>';
                echo '<td>' . $row['present'] . '</td>';
                
                echo "</tr>"; 
        } 
        // close table>
        echo "</table>";
        echo "</div>";
?>
<br><br>
<hr>


<?php
//colombia  = 15
       mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("copa_america");
        $result = mysql_query("SELECT * FROM player_info where team_id='15' ") 
                or die(mysql_error());  
        echo "<p><b>Colombian player info</b> </p>";   
      echo " <div align='center'> "   ;
        echo "<table border='1' cellpadding='10'>";
        echo "<tr> <th>Name</th> <th>Jursy No</th> <th>age</th>  <th>present</th>";
        while($row = mysql_fetch_array( $result )) {
                echo "<tr>";
                echo '<td>' . $row['player_name'] . '</td>';
                echo '<td>' . $row['jursy_number'] . '</td>';
                echo '<td>' . $row['age'] . '</td>';
                echo '<td>' . $row['present'] . '</td>';
                
                echo "</tr>"; 
        } 
        // close table>
        echo "</table>";
        echo "</div>";
?>
<br><br>
<hr>


<?php
//maxico = 25
                    
       mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("copa_america");
        $result = mysql_query("SELECT * FROM player_info where team_id='25' ") 
                or die(mysql_error());  
        echo "<p><b>Maxican player info</b> </p>";   
      echo " <div align='center'> "   ;
        echo "<table border='1' cellpadding='10'>";
        echo "<tr> <th>Name</th> <th>Jursy No</th> <th>age</th>  <th>present</th>";
        while($row = mysql_fetch_array( $result )) {
                echo "<tr>";
                echo '<td>' . $row['player_name'] . '</td>';
                echo '<td>' . $row['jursy_number'] . '</td>';
                echo '<td>' . $row['age'] . '</td>';
                echo '<td>' . $row['present'] . '</td>';
                
                echo "</tr>"; 
        } 
        // close table>
        echo "</table>";
        echo "</div>";
?>
<br><br>
<hr>



<?php
//jamaica  = 26
       mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("copa_america");
        $result = mysql_query("SELECT * FROM player_info where team_id='26' ") 
                or die(mysql_error());  
        echo "<p><b>Jamaican player info</b> </p>";   
      echo " <div align='center'> "   ;
        echo "<table border='1' cellpadding='10'>";
        echo "<tr> <th>Name</th> <th>Jursy No</th> <th>age</th>  <th>present</th>";
        while($row = mysql_fetch_array( $result )) {
                echo "<tr>";
                echo '<td>' . $row['player_name'] . '</td>';
                echo '<td>' . $row['jursy_number'] . '</td>';
                echo '<td>' . $row['age'] . '</td>';
                echo '<td>' . $row['present'] . '</td>';
                
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