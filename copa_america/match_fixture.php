<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>football match fixture</title>
</head>

<body>
<h1>Participators </h1>


<?php

       mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("copa_america");

        // get results from database
        $result = mysql_query(("SELECT team_info.team_name,  group_t.group_name FROM team_info INNER JOIN group_t  ON 
          team_info.team_id = group_t.team_id ")      )
                or die(mysql_error());  
                
        // display data in table
        echo "<div align='center'><b>Team and group info</b> </div> <br>";
         
      echo " <div align='center'> "   ;

        echo "<table border='1' cellpadding='10'>";
        echo "<tr>  <th width=100>team_name</th> <th width=100>group name</th>";
        while($row = mysql_fetch_array( $result )) {

                echo "<tr>";

                echo '<td >' . $row['team_name'] . '</td>';
                echo '<td >' .'Group '. $row['group_name'] . '</td>';
                echo "</tr>"; 
        } 

        // close table>
        echo "</table>";

        echo "</div>";
?>
<br><br>
<hr>




<h1>team name , date , vanue , result</h1>


















<hr>


<table width="90%" border="1">
  <tr>
    <td width="250"><strong>Group A</strong></td>
    <td width="250"><strong>Group  B</strong></td>
    <td width="250"><strong>Group C</strong></td>
    <td width="250"><strong>Group D</strong></td>
  </tr>
  <tr>
    <td><strong>USA</strong></td>
    <td><strong>Brazil</strong></td>
    <td><strong>Maxico</strong></td>
    <td><strong>Argentina</strong></td>
  </tr>
  <tr>
    <td><strong>Paraguea</strong></td>
    <td><strong>Peru</strong></td>
    <td><strong>Jamaica</strong></td>
    <td><strong>Chili</strong></td>
  </tr>
</table>

<hr>

<h1>First round</h1>
<table width="90%" border="1">
  <tr>
    <td colspan="4"><div align="center"><strong>Group A</strong></div></td>
  </tr>
  <tr>
    <td width="250"><strong>group name</strong></td>
    <td width="250"><strong>Flag</strong></td>
    <td width="250"><strong>date</strong></td>
    <td width="250"><strong>goal</strong></td>
  </tr>
  <tr>
    <td><strong>USA</strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Paraguea</strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="90%" border="1">
  <tr>
    <td colspan="4"><div align="center"><strong>Group B </strong></div></td>
  </tr>
  <tr>
    <td width="250"><strong>group name</strong></td>
    <td width="250"><strong>Flag</strong></td>
    <td width="250"><strong>date</strong></td>
    <td width="250"><strong>goal</strong></td>
  </tr>
  <tr>
    <td><strong>Brazil</strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Peru</strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="90%" border="1">
  <tr>
    <td colspan="4"><div align="center"><strong>Group C </strong></div></td>
  </tr>
  <tr>
    <td width="250"><strong>group name</strong></td>
    <td width="250"><strong>Flag</strong></td>
    <td width="250"><strong>date</strong></td>
    <td width="250"><strong>goal</strong></td>
  </tr>
  <tr>
    <td><strong>USA</strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Paraguea</strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="90%" border="1">
  <tr>
    <td colspan="4"><div align="center"><strong>Group D </strong></div></td>
  </tr>
  <tr>
    <td width="250"><strong>group name</strong></td>
    <td width="250"><strong>Flag</strong></td>
    <td width="250"><strong>date</strong></td>
    <td width="250"><strong>goal</strong></td>
  </tr>
  <tr>
    <td><strong>Maxico</strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Jamaica</strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<h1>Semi &nbsp;final</h1>
<table width="90%" border="1">
  <tr>
    <td colspan="4"><div align="center"><strong>Group A vs Group B</strong></div></td>
  </tr>
  <tr>
    <td width="250"><strong>group name</strong></td>
    <td width="250"><strong>Flag</strong></td>
    <td width="250"><strong>date</strong></td>
    <td width="250"><strong>goal</strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="90%" border="1">
  <tr>
    <td colspan="4"><div align="center"><strong>Group C vs Group D </strong></div></td>
  </tr>
  <tr>
    <td width="250"><strong>group name</strong></td>
    <td width="250"><strong>Flag</strong></td>
    <td width="250"><strong>date</strong></td>
    <td width="250"><strong>goal</strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<h1>Final</h1>
<table width="90%" border="1">
  <tr>
    <td colspan="4"><div align="center"><strong>Winner from (Group A vs Group B) vs (Group C vs  Group D)</strong></div></td>
  </tr>
  <tr>
    <td width="250"><strong>group name</strong></td>
    <td width="250"><strong>Flag</strong></td>
    <td width="250"><strong>date</strong></td>
    <td width="250"><strong>goal</strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>


</body>
</html>
