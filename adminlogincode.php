

<?php

session_start();
?>



<?php
$log1=$_POST['login'];
$pass1=$_POST['password'];
$con=@mysql_connect("localhost","root","") or die(mysql_error());
$db=@mysql_select_db("jobalert",$con)or die(mysql_error());

$sql="SELECT * FROM admintable WHERE Login='$log1' and password='$pass1'";

$result=mysql_query($sql);

$count=mysql_num_rows($result);

if($count<1){echo "Wrong Login or Password";}
else
	{
		$_SESSION[user]=$username;
		header("location:Admin.php");
	}

ob_end_flush();
?>
<html>
<body>

<br><br>
<a href="AdminLogin.php"> <font color="black" size="4"><b>Click Here to go back....</b></font></a>
</body>
</html>