<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="copa_america"; // Database name 
$tbl_name="beta_test"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$name=$_POST['name'];
$id=$_POST['id'];



// Insert data into mysql 
$sql=mysql_query("INSERT INTO $tbl_name VALUES('$name', '$id')");
//$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful".

if($sql){
echo "Successful";
}

else {
echo "ERROR";
}
?> 

<?php 
// close connection 
mysql_close();
?>