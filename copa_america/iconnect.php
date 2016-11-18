<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="copa_america"; // Database name 
$tbl_name="player_info"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$player_id=$_POST['player_id'];
$player_name=$_POST['player_name'];
$jursy_number=$_POST['jursy_number'];
$age=$_POST['age'];

$team_id= $_POST['team_id'];
$present=$_POST['present'];


// Insert data into mysql 
$sql=mysql_query("INSERT INTO $tbl_name VALUES('$player_id', '$player_name', '$jursy_number', '$age' , '$team_id'  , '$present' )");
//$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful".

if($sql){
echo "Successful";
echo '<br> <a href="insert.php?"> back to insert page </a> ' ;

}

else {
echo "ERROR";
}
?> 

<?php 
// close connection 
mysql_close();
?>