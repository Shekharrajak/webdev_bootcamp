<!DOCTYPE html>
<html>
<head>
	<title>home page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<center><h1>Bootcamp</h1></center>
<div class="container  col-sm-4 col-sm-offset-1 " >
<h1> Login Form</h1>
<form action="login.php"  method="POST" class="form-horizontal">
	Enter email:
	<input class="form-control" name="email" type="email" >

	Enter password:
	<input class="form-control" name="pass" type="password" >
	<br>
	<input type="submit" class="btn btn-primary" name="login" value="Log in">
	</form>
</div>
<div class="container  col-sm-4 col-sm-offset-2" >
<h1> Register Form</h1>
<form action="register.php"  method="POST" class="form-horizontal">
	Enter username:
	<input class="form-control" name="username" type="text"  >

	Enter email:
	<input class="form-control" name="email" type="email" >

	Enter password:
	<input class="form-control" name="pass" type="password" >

	Gender
	<select class="form-control" name="gender" >
	   <option value="M">Male</option>
	   <option value="F">Female</option>
	   <option value="O">Other</option>
	 </select>
	 <br>

	<input type="submit" class="btn btn-primary" name="reg" value="Register">
	</form>
</div>



</form>

</body>
</html>
