<?php	
					
$servername = "mysql.hostinger.in";
$dbusername = "u565745662_root";
$password = "123456789";
$dbname = "u565745662_panka";

$add=$_POST['tname'];
$username=$_POST['username'];
$pass=$_POST['password'];

$conn = mysqli_connect("mysql.hostinger.in","u565745662_root","123456789","u565745662_panka");
mysqli_select_db($conn,'pankaj');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql ="INSERT INTO adT(Name,username,password) VALUES('$add','$username','$pass')";

if (mysqli_query($conn, $sql)) {
    header('location: adT.php');
} else {
			 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>