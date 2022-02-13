<?php
echo "1'or'1'='1";

$title = "REG OR LOGIN";
$content = '

<!DOCTYPE HTML>
<html lang="en-US">
<head>

</head>
<body>
	<center><h2><u>PROJECT ON : SQL INJECTION </u></h2></center>
	<center><h3>Supervised By : Narayan Ranjan Chakraborty</h3></center>
		<br>
			<center>
				<form method="post" action="login_submit.php">
					<h2>Login Form</h2>
					<br>
					<br>
					<input type="email" name="e" placeholder="Enter Your Email"/><br><br>
					<input type="password" name="p" placeholder="Enter Your Password" /><br><br><br>
					<input type="submit" name="login" value="Submit"/>
				</form>
			</center>
		<br>
		<br>
		<br>
		
		
		
		<center>
			<form method="post" enctype="multipart/form-data" action="regis_submit.php">
				<h2>Registration Form</h2>
				<br>

				<br>

				<input type="text" name="n" placeholder="Enter Your name"/><br><br>
				<input type="email" name="e" placeholder="Enter Your Email" /><br><br>
				<input type="integer" name="nm" placeholder="Enter Your Number"/><br><br>
				<input type="password" name="p" placeholder="Enter Your Password"/><br><br>
				
				<input type="submit" name="submit" value="Submit"/>
				</form>
		</center>
		<br>
		<br>
	
</body>
</html>';
include 'Template.php';
?>