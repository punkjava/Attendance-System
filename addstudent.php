<?php
$servername = "mysql.hostinger.in";
$username = "u565745662_root";
$password = "123456789";
$dbname = "u565745662_panka";

$studname = $_POST['Sname'];
$studroll = $_POST['Sroll'];
$class = $_POST['class'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql="INSERT INTO department(student_name,roll_no,class)VALUES('$studname','$studroll','$class')";
if($conn->query($sql) === TRUE) {
	header('location:auth.php');
}
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);
?>