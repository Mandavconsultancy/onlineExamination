<HTML>
<link rel="stylesheet" href="quiz.css" type="text/css">
<body><center>

        <?php

include("contentdb.php");

$result = mysql_query("SELECT * FROM $table ORDER BY id",$db);

echo "<table>";
echo "<tr><td>id:</td><td>q</td><td>question</td><td>opt1</td><td>opt2</td><td>opt3</td><td>answer</td></tr>";

while ($row = mysql_fetch_array($result)) 
{
	
	$id = $row["id"]; 
	$question = $row["question"]; 
	$q = $row["q"];
	$opt1 = $row["opt1"];
	$opt2 = $row["opt2"];
	$opt3 = $row["opt3"];
	$answer = $row["answer"];
	if ($alternate == "1") { 
	$color = "#ffffff"; 
	$alternate = "2"; 
	} 
	else { 
	$color = "#efefef"; 
	$alternate = "1"; 
	} 
	echo "<tr bgcolor=$color><td>$id:</td><td>$q</td><td>$question</td><td>$opt1</td><td>$opt2</td><td>$opt3</td><td>$answer</td></tr>"; 
} 
echo "</table>";
?>
       
</center>
</body>
</HTML>