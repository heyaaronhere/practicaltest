<?php 
	session_start();
	
	if(isset($_POST['submit']))
	{
		if((isset($_POST['email']) && $_POST['email'] !='') && (isset($_POST['password']) && $_POST['password'] !=''))
		{
			$email = trim($_POST['email']);
			$password = trim($_POST['password']);
			
			if($email == "user@example.com")
			{	
				if($password == "password1234")
				{
					$_SESSION['user_id'] = $email;
					
					header('location:dashboard.php');
					exit;
					
				}
			}
			$errorMsg = "Login failed";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Page | PHP Login and logout example with session</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
	
	<div class="container">
		<h1>Practical Test</h1>
		<?php 
			if(isset($errorMsg))
			{
				echo "<div class='error-msg'>";
				echo $errorMsg;
				echo "</div>";
				unset($errorMsg);
			}
		?>
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
			<table>
				<tr>
					<td><input type="text" name="k" value="<?php echo isset($_GET['k']) ? $_GET['k'] : ''; ?>" placeholder="Enter your search keywords" /></td>
					<td><input type="submit" name="" value="Search" /></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>