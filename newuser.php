<?php
$uname=$_POST['username'];
$add=$_POST['address'];
$gen=$_POST['gender'];
$log=$_POST['login'];
$pass=$_POST['password1'];

$con=@mysql_connect("localhost","root","") or die(mysql_error());
$db=@mysql_select_db("jobalert",$con)or die(mysql_error());
$str="insert into usertable values('$uname','$add','$gen','$log','$pass')";
$res=@mysql_query($str)or die(mysql_error());
if($res>=0)
{
echo'<br><br><b>Thank you for registration !! <br>';
}

?>
<html>
<br>
<a href="Register.php"><b>Click here to return to the main page</b></a>
</html>
