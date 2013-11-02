<?php ?><!DOCTYPE html>
<html>
	<head>
		<title>Register</title>
 		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
 		<script src="assets/js/main.js"></script>
  	</head>
	<body>
		<form id="regForm" action="whatever.php" method="post">
		<p>
			User Name
			<input id="regFormName" type="text" name="username" size="20" />
		</p>
		<p>
			E-Mail
			<input id="regFormEmail1" type="email" name="email" size="50" />
		</p>
		<p>
			Confirm E-Mail
			<input id="regFormEmail2" type="email" size="50" />
		</p>
		<p>
			Password
			<input id="regFormPass1" type="password" name="password" size="30" />
		</p>
		<p>
			Password
			<input id="regFormPass2" type="password" size="30" />
		</p>
		<input id="regFormSubmit" type="submit" name="submit" value="Register" />
	</form>
	</body>
</html>