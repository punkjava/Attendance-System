<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location: login.php');
}
$conn =  new mysqli("mysql.hostinger.in","u565745662_root","123456789","u565745662_panka");
if($conn->connect_errno){
	echo 'connection failed';
}
?>
<!doctype html>
<html>
<head>
<title>Student details</title>
<link href="css/style3.css" rel="stylesheet" type="text/css" /> 
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
		<li><a href="adC.php" href>Add class</a></li>
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
<h2><i>Student details</i><br></br></h2>
</div>
<form action="selectstudentdetail.php">
<div id="form">
 Student Name:<br>
 <input type="text" name="student" placeholder="enter student name"/><br>
 class:<br>
<select name="class">
<option>--select class--</option>
<?php
		if($stmt=$conn->query("select * from class"))
		{
			while($result=$stmt->fetch_array(MYSQLI_ASSOC))
			{
				?>
				<option value="<?php echo $result['classes'] ?>"> <?php echo $result['classes']?> </option>
			<?php } } ?>
</select>
</div>		
		<div id="submit">
<input type="submit" value="Search" style="width:100px;height:30px;font-size:20px;" />
		</div>
</form>


</div>
</div>

		</div>
		
</body>
</html>