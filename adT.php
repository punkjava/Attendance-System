<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
}
?>
<!doctype html>
<html>
<head>
<title>Add Teacher</title>
<link href="css/adT.css" rel="stylesheet" type="text/css" /> 
</head>
<body>
<div id="wrapper">
		<h1>Android Based Attendance System</h1>
		<div id="header">
		<div id="image">
		<img src="image/att1.jpg" width="990" height="350"/></div>
		<div id="menu">
		<ul>
		<li><a href="auth.php">Add student</a></li>
		<li><a href="adC.php">Add class</a></li>
		<li><a href="#">Add Teacher</a></li>
		<li><a href="#">View/Edit details</a>
			<ul>
			<li><a href="Tdetails.php">Teacher details</a></li>
			<li><a href="Sdetails.php">Student details</a></li>
			</ul>
			</li>
		<li><a href="logout.php">Logout</a></li>
		</ul>
</div>
<div id="ads1">
<h2><i>Add Teacher</i><br></br></h2>
</div>
<form action="addteacher.php" method="post">
<div id="form">
Teacher Name :<br><input type="text" name="tname" autofocus><br></br>
username: <br>   <input type="text" name="username"><br></br>
password:<br><input type="password" name="password"><br></br>
</div>
<div id="submit">
<input type="Submit" style="width:100px;height:40px;font-size:20px;" />
		</div>

</div>
</div>
</form>
		</div>
		
</body>
</html>