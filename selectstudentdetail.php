<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pankaj";

$studname = $_POST['student'];
$class = $_POST['class'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql="SELECT * FROM department WHERE student_name='$studname' AND class='$class'";
if($conn->query($sql) === TRUE) {
	header('location:Sdetails.php');
}
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);
?>