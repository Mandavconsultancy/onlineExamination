<HTML>
<link rel="stylesheet" href="quiz.css" type="text/css">
<body><center>
<P>&nbsp;</P>

<B>Admin area - edit the quiz</B>
<?php
include("contentdb.php");
if($submit)
{
$sql = "INSERT INTO $table (question, opt1, opt2, opt3, answer) VALUES ('$question','$opt1','$opt2','$opt3','$answer')";
$result = mysql_query($sql);
echo "<br><br>Question added to quiz.<br><br>";
include "qinsert.php";
}
else if($update)
{
$sql = "UPDATE $table SET question='$question',opt1='$opt1',opt2='$opt2',opt3='$opt3',answer='$answer' WHERE id=$id";
$result = mysql_query($sql);
echo "<br><br>The quiz has been succesfully updated.<br><br>\n";
}
else if($id)
{
$result = mysql_query("SELECT * FROM $table WHERE id=$id",$db);
$myrow = mysql_fetch_array($result);
?>
<form method="post" action="<?php echo $PHP_SELF?>">
<input type="hidden" name="id" value="<?php echo $myrow["id"]?>">
    <b>Question:</b><br>
    <input type="Text" name="question" value="<?php echo $myrow["question"]?>" size="50">
    <br>
    <b>Option 1:</b><br>
    <input type="Text" name="opt1" value="<?php echo $myrow["opt1"]?>" size="30">
    <br>
    <b>Option 2:</b><br>
    <input type="Text" name="opt2" value="<?php echo $myrow["opt2"]?>" size="30">
    <br>
    <b>Option 3:</b><br>
    <input type="Text" name="opt3" value="<?php echo $myrow["opt3"]?>" size="30">
    <br>
    <b>Answer</b> (must be identical to correct option):<br>
    <input type="Text" name="answer" value="<?php echo $myrow["answer"]?>" size="30">
    <br>
    <br>
<input type="Submit" name="update" value="Update information"></form>
<?

}
else
{
?>
<form method="post" action="<?php echo $PHP_SELF?>">
    <p><br>
      <b>Question:</b><br>
      <input type="Text" name="question" size="50">
      <br>
      <b>Option 1:</b><br>
      <input type="Text" name="opt1" size="30">
      <br>
      <b>Option 2:</b><br>
      <input type="Text" name="opt2" size="30">
      <br>
      <b>Option 3:</b><br>
      <input type="Text" name="opt3" size="30">
      <br>
      <b>Answer</b> (must be identical to correct option):<br>
      <input type="Text" name="answer" size="30">
      <br>
      <br>
      <input type="Submit" name="submit" value="Enter information">
    </p>
    </form>
<?
}
?>
<a href="editquizlist.php">Back to list of quiz questions</a>
</center>
</body>
</HTML>