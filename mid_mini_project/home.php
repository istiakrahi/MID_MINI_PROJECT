<?php

  session_start();

	if(isset($_SESSION['status'])){

		if($_SESSION['status'] == "OK"){

		

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
		<h3>welcome admins home </h1><br>
		
		<h2>Welcome bob!</h2>

		<a href="profile.html">profile</a>
		<a href="changepassword.html">changepass</a>
		<a href="users.html">View users</a>
		<a href="logout.php">logout</a>

			
</body>
</html>

<?php

}else
{
	header('location: login.php');
}

}
else
{
	header('location: login.php');
}

?>