<?php
// add includes to sessions
require('../includes/sessions.inc.php');
require('../includes/conn.inc.php');

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login Demo</title>
<link rel="stylesheet" href="../css/mobile.css">
<link rel="stylesheet" href="../css/desktop.css" media="screen and (min-width: 992px)">
</head>

<body>
<div class="container">
  <div class="loginContainer">
    <div class="login">
      <h1>Login</h1>
        <?php
        // error message for user here	
        if (isset($_SESSION['loginError'])) {
            echo "<p class=\"error\">Invalid Login Details</p>";
        } 
        ?>

      <form action="../process/checkLogin.php" method="post">
        <div>
          <label for="userEmail">Email:</label>
          <input type="text" name="userEmail" id="userEmail">
        </div>
        <div>
          <label for="password">Password:</label>
          <input type="password" name="password" id="password"> <!-- can change type to password to hide the password when typing -->
        </div>
        <div>
          <input type="submit" value="Login">
        </div>
      </form>
      <p><a href="../pages/register.php">Register</a></p>
    </div>
  </div>
</div>

<?php
// debugging include
// remove in productions
//require('../includes/debugger.inc.php');
?>
</body>
</html>
