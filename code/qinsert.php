<?

include("contentdb.php");

$findid = mysql_query("SELECT id FROM $table ORDER BY id DESC",$db);
$myrow = mysql_fetch_array($findid);
$id = $myrow["id"];

$qsql = "UPDATE $table SET q='q$id' WHERE id=$id";
$qresult = mysql_query($qsql);

?>