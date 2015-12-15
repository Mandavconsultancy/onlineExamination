<HTML>
<link rel="stylesheet" href="quiz.css" type="text/css">
<body><center>
<P>&nbsp;</P>

<B>Admin area - edit the quiz</B>
<br><br>
  <table width="300" border="0" cellspacing="0" cellpadding="0">

        <?php

include("contentdb.php");

$result = mysql_query("SELECT id, question FROM $table ORDER BY id",$db);

echo "<table>";

while ($row = mysql_fetch_array($result)) 
{
	
	$id = $row["id"]; 
	$question = $row["question"]; 
	if ($alternate == "1") { 
	$color = "#ffffff"; 
	$alternate = "2"; 
	} 
	else { 
	$color = "#efefef"; 
	$alternate = "1"; 
	} 
	echo "<tr bgcolor=$color><td>$id:</td><td>$question</td><td>[ <a href='editquiz.php?id=$id'>edit</a> ]</td><td>[ <a href='deletequiz.php?id=$id' onClick=\"return confirm('Are you sure?')\">delete</a> ]</td></tr>"; 
} 
echo "</table>";
?>
        <br>
        <br>
        <a href="editquiz.php">Add a new question to the quiz</a></td>
    </tr>
  </table>
  <br>
  <br>
<a href="quizinfo.php">See the full quiz table</a>
</center>
</body>
</HTML>