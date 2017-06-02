<html>
<body>
<?php
$conn=mysqli_connect("localhost","user1","12345","temp");
if(!$conn)
{
die("connection failed".mysqli_error($conn));
}
$username=$_POST['username'];
$password=$_POST['password'];
$sql="select * from register_sample2 where uname='".$username."' and upwd='".$password."'";
$data=mysqli_query($conn,$sql);
$rec=mysqli_num_rows($data);
if($rec>0)
{
echo "Valid User<br/>";

}
else
{
echo "In valid User<br/>";
}
mysqli_close($conn);
?>
<div>
<br/>
<a href="update.html">Goto Update page</a>
</div>
</body>
</html>
