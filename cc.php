<?php
$servername = "mysql.hostinger.in";
$username = "u565745662_root";
$password = "123456789";
$dbname = "u565745662_panka";
$class=$_POST['class'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO class (classes)
VALUES ('$class')";

if ($conn->query($sql) === TRUE) {
	header('location:adC.php');
}
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>