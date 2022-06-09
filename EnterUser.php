<?php
$name=$_POST['name1'];
$add=$_POST['address1'];
$ag=$_POST['age1'];
$gen=$_POST['gender1'];
$edu=$_POST['education1'];
$mob=$_POST['mobile1'];
$em=$_POST['email1'];




$con=@mysql_connect("localhost","root","") or die(mysql_error());
$db=@mysql_select_db("jobalert",$con)or die(mysql_error());
$str="insert into jobdetail values('$name','$add','$ag','$gen','$edu','$mob','$em')";
$res=@mysql_query($str)or die(mysql_error());
if($res>=0)
{
echo'<br><br><b>Thanks to Enter Job Details  !! <br>';
}

?>
<html>
<br>
<a href="EnterUserDetail.php"><b>Click here to return to the main page</b></a>
</html>
