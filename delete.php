
<?php
$conn=mysqli_connect("localhost","user1","12345","temp");
if(!$conn)
{
die("connection failed.".mysqli_error($conn));
}
$sno=$_POST['sno'];
$sql="delete from register_sample2 where sno=".$sno.";";
$result=mysqli_query($conn,$sql);
//$rows=mysqli_num_rows($result);
if(mysqli_query($conn,$sql))
{
echo "record deleted successfully";
}
else
{
echo mysqli_error($conn);
}
?>

