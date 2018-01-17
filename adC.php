<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
	}
?>
<!doctype html>
<html>
<head>
<title>Add Class</title>
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
		<li><a href="#">Add class</a></li>
		<li><a href="adT.php">Add Teacher</a></li>
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
<h2><i>Add Class</i><br></br></h2>
</div>
<form action="cc.php" method="post">
<div id="form">
Class:<br><input type="text" name="class" autofocus><br></br>
</div>
<div id="submit">
<input type="Submit" style="width:100px;height:40px;font-size:20px;" />

		</div>
</form>
</div>
</div>

		</div>
		
</body>
</html>