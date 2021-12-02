<?php 
	session_start();
	
	if(isset($_POST['submit']))
	{
		if((isset($_POST['email']) && $_POST['email'] !='') && (isset($_POST['password']) && $_POST['password'] !=''))
		{
				if (strpos($_POST['Search'],'<script>') !== false) { // attack
		
				  $_POST['Search'] ="";
				}
				else{
					$_SESSION['Search'] =  $_POST['Search'];
					header('location:dashboard.php');
				 exit;
				}
	}
?>

<!DOCTYPE html>
<html>
<head>
<title>3x03 Practical </title>
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
					<td><input type="submit" name="" value="search" /></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>