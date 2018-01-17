<?php
session_start();
?>
<!DOCTYPE html>

<html >
<head>
  <title>Login Form</title>
  
  <link href="css/login.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="wrapper2">
<div id="header2">
  <div class="login">
	<h1>Admin Login</h1>
    <form action="validation.php" method="post">
    	<input type="text"  placeholder="Username"  name="username" required="required"/>
        <input type="password"  placeholder="Password" name="password" required="required" />
        <button type="Login" value="submit" class="btn btn-primary btn-block btn-large">Login</button><br><br>
    </form>
	<center><a href="index1.php">HOME</a><center>
</div>
</div>

   
</div>  
</body>
</html>
