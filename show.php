<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
.table{
border:2 px solid red;
}
.container
{
padding:0px;
}
</style>
<body>
<div class="container">
     <nav class="nav navbar-inverse">
	    <div class="nav navbar-header" style="margin:10px;padding:10px">
		<h2><a href="#" style="text-decoration:none;">Mywebsite</a></h2>
	   
		<ul class="nav navbar-nav" style="float:left;">
			<li><h4><a class="active" href="home.html" style="text-decoration:none;">Home&nbsp;&nbsp;&nbsp;</a></h4></li>
			<li><h4><a href="regist.php" style="text-decoration:none;">Registration&nbsp;&nbsp;&nbsp;</a></h4></li>
			<li><h4><a href="verifylogin.html" style="text-decoration:none;">Login&nbsp;&nbsp;&nbsp;</a></h4></li>
			<li><h4><a href="update.html" style="text-decoration:none;">Update&nbsp;&nbsp;&nbsp;</a></h4></li>
			<li><h4><a href="delete.html" style="text-decoration:none;">Delete</a></h4></li>
		</ul>
	   </div>
<br/>
    </nav>	
 </div>


<div class="container">
<?php
//$conn=mysqli_conn("localhost","user1","12345","temp");
$conn=mysql_connect("localhost","user1","12345");
mysql_select_db('temp');
$query=mysql_query("select * from register_sample2",$conn);
while($row=mysql_fetch_array($query))
{
echo "<pre>".print_r($row,1)."</pre>";

}
exit;
if(!$conn)
{
die("connection failed.".mysqli_error($conn));
}
$table=$_POST['table'];
echo $table;
$sql="select * from register_sample2";
$data=mysqli_query($conn,$sql);
echo "<table border='1px solid yellow'>";
while($rec = mysqli_fetch_rows($data))
{
echo "<pre>".print_r($rec,1)."</pre>";
  echo "<tr><td>";
  echo "$rec[0]<br>";
  echo "$rec[1]<br>";
  echo "$rec[2]<br>";
  echo "$rec[3]<br>";
  echo "</td></tr><br>";
}
echo "</table>";
mysqli_close($conn);
?>
</div>
</body>
</html>
