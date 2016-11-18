<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="title">
<h2>Update Data Using PHP</h2>
</div>
<p>Players list</p>
<?php
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("copa_america", $connection);
if (isset($_GET['submit'])) {
$id = $_GET['did'];
$name = $_GET['dname'];

$jursy = $_GET['daddress'];
$query = mysql_query("update player_info set
player_name='$name',

jursy_number='$jursy' where player_id='$id'", $connection);
}
$query = mysql_query("select * from player_info", $connection);
while ($row = mysql_fetch_array($query)) {
echo "<b><a href='pupdate.php?update={$row['player_id']}'>{$row['player_name']}</a></b>";
echo "<br />";
echo "<br />";
}
?>


<?php
if (isset($_GET['update'])) {
$update = $_GET['update'];
$query1 = mysql_query("select * from player_info where player_id=$update", $connection);
while ($row1 = mysql_fetch_array($query1)) {
echo "<form class='form' method='get'>";
echo "<h2>Update Form</h2>";
echo "<hr/>";
echo"<input class='input' type='hidden' name='did' value='{$row1['player_id']}' />";
echo "<br />";
echo "<label>" . "Name:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='dname' value='{$row1['player_name']}' />";
echo "<br />";


echo "<label>" . "jursy:" . "</label>" . "<br />";
echo "<textarea rows='15' cols='15' name='daddress'>{$row1['jursy_number']}";
echo "</textarea>";
echo "<br />";
echo "<input class='submit' type='submit' name='submit' value='update' />";
echo "</form>";
}
}
if (isset($_GET['submit'])) {
echo '<div class="form" id="form3"><br><br><br><br><br><br>
<Span>Data Updated Successfuly......!!</span></div>';
}
?>
<div class="clear"></div>
<div class="clear"></div>

<?php
mysql_close($connection);
?>
</body>
</html>