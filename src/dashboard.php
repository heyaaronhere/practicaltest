<?php 
	session_start();
		
	if(!isset($_SESSION['user_id']))
	{
		header('location:index.php');
		exit;
	}
	

?>

<!DOCTYPE html>
<html>
<head>
<title>Success</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="container-dashboard">
		Welcome <span class="user-name"><?php echo ucwords($_SESSION['first_name'])?> <?php echo ucwords($_SESSION['last_name']);?> </span> 
		<br>
		
		<a href="logout.php?logout=true" class="logout-link">Logout</a>
	</div>
</body>
</html>