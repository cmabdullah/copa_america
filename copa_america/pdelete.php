<!DOCTYPE html>
<html>
<head>
<title>Delete Data from player info</title>


</head>
<body>

<h2>Delete Data Using PHP</h2>



<?php

$connection = mysql_connect("localhost", "root", ""); // Eastablishing Connection With Server.
$db = mysql_select_db("copa_america", $connection); // Selecting Database From Server.
if (isset($_GET['del'])) {
$del = $_GET['del'];
//SQL query for deletion.
$query1 = mysql_query("delete from player_info where player_id=$del", $connection);
}
$query = mysql_query("select * from player_info", $connection); // SQL query to fetch data to display in menu.
while ($row = mysql_fetch_array($query)) {
echo "<b><a href=\"pdelete.php?id={$row['player_id']}\">{$row['player_name']}</a></b>";
echo "<br />";
}
?>
<?php

if (isset($_GET['id'])) {
$id = $_GET['id'];
// SQL query to Display Details.
$query1 = mysql_query("select * from player_info where player_id=$id", $connection);
while ($row1 = mysql_fetch_array($query1)) {
?>

<form>
<h2>---Details---</h2>
<span>player name:</span> <?php echo $row1['player_name']."<br>"; ?>
<span>jursy number:</span> <?php echo $row1['jursy_number']."<br>"; ?>
<span>Age:</span> <?php echo $row1['age']."<br>"; ?>
<span>Present:</span> <?php echo $row1['present']."<br>"; ?>

<?php 
echo "<b><a href=\"pdelete.php?del={$row1['player_id']}\"><input type=\"button\" class=\"submit\" value=\"Delete\"/></a></b>"; 
?>


</form>

<?php
}
}
// Closing Connection with Server.
mysql_close($connection);
?>
<div class="clear"></div>

<div class="clear"></div>

</body>
</html>