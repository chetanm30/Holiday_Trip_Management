<html>
<body>
<body bgcolor="LIGHTPINK">
<center>

<hr>

<?php
$dbh=mysql_connect('localhost','root','')or die(mysql_error());
mysql_select_db('holiday tours') or die(mysql_error());

$var=mysql_query("SELECT * FROM reservation");

echo "<br><br>";

echo "<table border size=2 align=center>";
   echo"<tr><th><font size = 5> r_id</font></th><th><font size = 5>v_no</font></th><th><font size = 5> h_id</font></th><th> <font size = 5>p_id</font> </th><th><font size = 5> c_id </font></th><th><font size = 5> no_of_heads</font></th></tr>";
  while ($arr=mysql_fetch_row($var))
   {
	  
   echo"<tr><td><font size = 5>$arr[0]</font></td><td><font size = 5>$arr[1]</font></td> <td><font size = 5>$arr[2]</font></td> <td><font size = 5>$arr[3]</font></td><td><font size = 5>$arr[4]</font></td> <td><font size = 5>$arr[5]</font></td>   </tr>";
 } 
   echo"</table>";
 
   echo "<br><br>";
   echo "<a href=reser.html>
<font color = black size=5pt >   CLICK HERE TO GO BACK </a>";
   echo"<br><br>";
   echo "<a href=index2.html>
<font color = black size=5pt >    CLICK HERE TO GO BACK TO WELCOME PAGE</a>";
  
   
    mysql_close($dbh);
   ?>
   </body>
</html>

