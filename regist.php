<html>
<head><title>Task-3</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.table{
border:2 px solid red;
}
.container
{
padding:0px;
}
</style>
<script>
function validate()
{
var sno=document.myform.sno.value;
var name=document.myform.name.value;
var uname=document.myform.uname.value;
var upwd=document.myform.upwd.value;
if(sno==""||sno==null)
{
	document.getElementById("1").innerHTML="please provide a number.";
	document.myform.sno.focus();	
	return false;
}
else if(name==""||name==null)
{
	document.getElementById("2").innerHTML="Name should not be empty.";
	document.myform.name.focus();
	return false;
}
else if(uname=="" || uname==null)
{
	document.getElementById("3").innerHTML="User is required."
	document.myform.uname.focus();
	return false;
}
else if(upwd=="" || upwd==null)
{
	document.getElementById("4").innerHTML="Enter your Password."
	//document.myform.upwd.focus();
	return false;
}
}
</script>
</head>
<body>
<div class="container">
     <nav class="nav navbar-inverse">
	    <div class="nav navbar-header" style="margin:10px;padding:10px">
		<h2><a href="#" style="text-decoration:none;">CRUD Application</a></h2>
	   
		<ul class="nav navbar-nav" style="float:left;">
			<li><h4><a class="active" href="home.html" style="text-decoration:none;">Home&nbsp;&nbsp;&nbsp;</a></h4></li>
			<li><h4><a href="regist.php" style="text-decoration:none;">Registration&nbsp;&nbsp;&nbsp;</a></h4></li>
			<li><h4><a href="verifylogin.html" style="text-decoration:none;">Login&nbsp;&nbsp;&nbsp;</a></h4></li>
			<li><h4><a href="update.html" style="text-decoration:none;">Update&nbsp;&nbsp;&nbsp;</a></h4></li>
			<li><h4><a href="delete.html" style="text-decoration:none;">Delete&nbsp;&nbsp;&nbsp;</a></h4></li>
			<li><h4><a href="show.html" style="text-decoration:none;">ShowData</a></h4></li>
		</ul>
	   </div>
    </nav>	
 </div>
<!--<div class="container">
<a href="regist.php"><img src="register.jpg" class="img-circle" width="150px" height="150px"/></a>
<a href="ajax.html"><img src="login2.png" class="img-circle" width="150px" height="150px"/></a>
</div>-->
<div class="container" style=background-color:lightgreen;"">
<div class="col-md-8">
<form name="myform" action="insert.php" method="post">
<table>
<tr>
	<td><label>Sno&nbsp;&nbsp; </label><br/></td><td><input type="text" class="form-control" placeholder="Enter Serial Number" name="sno"><br/></td><td><span id="1" style="color:red"></span></td>
</tr>
<tr>
	<td><label>Name&nbsp;&nbsp; </label><br/></td><td><input type="text" class="form-control" placeholder="Enter Name" name="name"><br/></td><td><span id="2" style="color:red"></span></td>
</tr>
<tr>
	<td><label>User name&nbsp;&nbsp; </label><br/></td><td><input type="text" class="form-control" placeholder="Enter User Name" name="uname"><br/></td><td><span id="3" style="color:red"></td></span>
</tr>
<tr>
	<td><label>Password&nbsp;&nbsp; </label><br/></td><td><input type="password" class="form-control" placeholder="Enter Password" name="upwd"><br/></td><td><span id="4" style="color:red"></td></span>
</tr><br/>
<tr>
	<td><input type="submit" class="btn btn-primary" value="Register"></td><td><input type="reset" class="btn btn-danger" value="Reset"></td>
</tr>
</table>
</form>
</div>
</div>
</div>
<footer>
<div class="container" style="padding:10px;background-color:black;">
<div class="col-md-3 flow" style="float:left;">
<a href="home.html" style="text-decoration:none;">Home</a><br/>
<a href="#" style="text-decoration:none;">About Us</a><br/>
<a href="#" style="text-decoration:none;">FAQ's</a><br/>
</div>
<div class="col-md-3 flow" style="float:left;">
<a href="home.html" style="text-decoration:none;">Home</a><br/>
<a href="regist.php" style="text-decoration:none;">Registration</a><br/>
<a href="verifylogin.html" style="text-decoration:none;">Login</a><br/>
</div>
<div class="col-md-3 flow" style="float:left;">
<a href="home.html" style="text-decoration:none;hover=color:red;">Home</a><br/>
<a href="regist.php" style="text-decoration:none;">Registration</a><br/>
<a href="verifylogin.html" style="text-decoration:none;">Login</a><br/>
</div>
<div class="col-md-3 flow" style="float:left;">
<a href="https://www.facebook.com"><img src="fb.png" width="40px" height=40px></img></a>
<a href="https://www.whatsappweb.com"><img src="wa.jpg" width="40px" height=40px></img></a>
<a href="https://www.gmail.com"><img src="gmail.png" width="40px" height=40px></img></a>
</div>
</div>
</footer>

</body>
</html>

