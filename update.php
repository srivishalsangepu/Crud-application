<html>
<head>
</head>
<body>
<?php
$conn=mysqli_connect("localhost","user1","12345","temp");
if(!$conn)
{
die("connection failed".mysqli_error($conn));
}
$sno=$_POST['sno'];
$new_name=$_POST['newname'];
$new_username=$_POST['newuname'];
$new_password=$_POST['newupwd'];
$old_name=$_POST['name'];
$old_username=$_POST['uname'];
$old_password=$_POST['upwd'];

$sql="update register_sample2 set name='".$new_name."',uname='".$new_username."',upwd='".$new_password."' where sno='".$sno."' and name='".$old_name."' and uname='".$old_username."' and upwd='".$old_password."'";
//echo $sql;
$res=mysqli_query($conn,$sql);
$row=mysqli_num_rows($res);
echo $row;
echo "Data is updated.";
mysqli_close($conn);
?>
</body>
</html>
