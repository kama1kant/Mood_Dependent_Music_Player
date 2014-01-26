<html>
<head></head>
<body>


<form action="user_db_insrt.php" method="post">
			
			<table>
			
				<tr><th><h3>Register:</h3></tr>
				</div>
				<tr><td>Username : <input type="text" name="fname" /></tr>
				<tr><td>Password : <input type="password" name="Pass" /></tr>
				<tr><td><td><input type="submit" value="Register!" /></tr>
			
			</table>
		
		</form>
		<h3>Login Page</h3>
		<form action="login.php" method="post">
		<input type="submit" value="Login" />
		<br>
		</form>
		</body>
		</html>
		<?php
session_start();
$_SESSION['exist']="";
if(isset($_SESSION['log']))
echo $_SESSION['log'];
?>