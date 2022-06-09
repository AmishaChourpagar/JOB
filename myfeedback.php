<?php
$name=$_POST['name1'];
$em=$_POST['email1'];
$mob=$_POST['mobile1'];
$ag=$_POST['age1'];
$feed=$_POST['feedback1'];

$con=@mysql_connect("localhost","root","") or die(mysql_error());
$db=@mysql_select_db("jobalert",$con)or die(mysql_error());
$str="insert into feedback values('$name','$em','$mob','$ag','$feed')";
$res=@mysql_query($str)or die(mysql_error());
if($res>=0)
{
echo'<br><br><b>Thanks for your Comments !! <br>';
}

?>
<html>
<br>
<a href="Index.php"><b>Click here to return to the main page</b></a>
</html>
