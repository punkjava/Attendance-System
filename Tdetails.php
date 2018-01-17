<?php
session_start();
	$servername ="mysql.hostinger.in";
	$username ="u565745662_root";
	$password ="123456789";
	$db ="u565745662_panka";
	$conn= mysqli_connect($servername,$username,$password,$db);
	$query = "SELECT * FROM adt";
	$result = mysqli_query($conn,$query);
	?>

<!doctype html>
<html>
<head>
<title>Teacher details</title>
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
			<li><a href="#">Teacher details</a></li>
			<li><a href="Sdetails.php">Student details</a></li>
			</ul>
			</li>
		<li><a href="logout.php">Logout</a></li>
		</ul>
</div>
<div id="ads1">
<h2><i>Teacher details</i><br></br></h2>
</div>
		<table align="center" cellspacing="7" style="width:100%">
			<tr>
			<th>Name</th>
			<th>Username</th>
			<th>password</th>
			<th>Action</th>
			</tr>
			<?php
			if($result->num_rows> 0){
				while($row= mysqli_fetch_array($result)){
					?>
					<tr>
					<td align="center"><?php echo $row['Name'];?></td>
					<td align="center"><?php echo $row['username'];?></td>
					<td align="center"><?php echo $row['password'];?></td>
					<td align="center">
					<a href="deleteteacherdetail.php" name="Name" method="post">DELETE</a>
					</td>
					</tr>
					<?php
				}
			}
			else{
				?>
				<tr>
				<th colspan="2">There's no data found!!</th>
				</tr>
				<?php
			}
			?>
		</table>

</div>
</div>

</body>
</html>