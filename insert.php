<html>
<body>
<?php

$conn = mysqli_connect('localhost','user1','12345','temp');

if(!$conn)
{
	die('Connection failed!'.mysqli_error($conn));
}

/*$sql1="create table register_sample2(sno int,name varchar(30),uname varchar(30),upwd varchar(30))";
if(mysqli_query($conn,$sql1))
{
echo "Your table ".$sql."created successfully<br/>";
}
else
{
	echo mysqli_error($conn);
}*/
$sno = $_POST['sno'];
$name = $_POST['name'];
$uname = $_POST['uname'];
$upwd = $_POST['upwd'];

$sql = "INSERT INTO register_sample2(sno, name, uname, upwd) VALUES('$sno', '$name','$uname','$upwd')";

if(mysqli_query($conn,$sql))
{
	echo "<h3>Registerd Successfully</h3>";

}
else
{
	echo mysqli_error($conn);
}

?>
<a href="verifylogin.html">Goto Loginpage</a>
</body>
