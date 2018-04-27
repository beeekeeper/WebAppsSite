<?php
require('../includes/sessions.inc.php');
require('../includes/conn.inc.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Registration</title>
<link rel="stylesheet" href="../css/mobile.css">
<link rel="stylesheet" href="../css/desktop.css" media="screen and (min-width: 992px)">
</head>

<body>
<div class="container">
	<div class="loginContainer">
		<div class="login">
			<h1>Registration</h1>

		<?php
		// Error messages
    if (isset($_SESSION['regError'])) {
        switch($_SESSION['regError']){ 
        case 1 : echo "<p class=\"error\">Invalid Email Address</p>"; 
            break; 
        case 2 : echo "<p class=\"error\">Please confirm your password</p>"; 
            break; 
        case 3 : echo "<p class=\"error\">Already Registered</p>"; 
            break; 
        } 
    }
//have individual error messages for registration but not for logging in as that will help hackers etc getting access
		?>

		<form action="../process/userRegistration.php" method="post">
			<div>
				<label for="userLogin">Login:</label>
					<input type="text" name="userLogin" id="userLogin">

			</div>
			<div>
				<label for="password">Password:</label>
					<input type="password" name="password" id="password"> <!-- type can be changed to password so that it is censored when the password is being entered -->

			</div>
			<div>
				<label for="passwordConfirm">Confirm Password:</label>
					<input type="password" name="passwordConfirm" id="passwordConfirm">

			</div>
			<div>
				<input type="submit" value="Login">
			</div>
		</form>
		</div>
	</div>
</div>
<?php
//require('../includes/debugger.inc.php');
?>
</body>
</html>
