<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- bootstrap - mobile friendly part -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<title>TABEMASHOU</title> <!-- Shows up in the tab at the top -->
    <link type="text/css" rel="stylesheet" href="../css/desktop.css">
    
    

<!-- Have the name of the page currently on in the header -->

<style>
@import url('https://fonts.googleapis.com/css?family=Oswald'); /* imports the google font oswald which is used throughout the website */

@media (max-width: 767px) {
    /* for mobiles, 768 and up for small devices like tablets */
    /* CSS goes here */
    a li {
        display: block;
    }
    .col-md-2 {
        text-align: center;
        display: block;
    }
}
</style>


</head>


<!-- START OF TOP CONTAINER -->

<div class="container-fluid">
    <div class="blankRow3">
        <div colspan="12"> <!-- Blank row -->
        </div>
    </div>
</div>

    <div class="container-fluid">
        <div class="siteContainerTop">
        <!-- This will include the Logo - and maybe the search bar and basket -->
        <a class="topLogo" href="../pages/index.php">
        <div class="col-md-4 col-md-offset-4">
        食べましょう
        </div>
        <a></a>
        </div>
    </div>
    <div class="container-fluid">
        <div class="siteContainerTop">
        <!-- This will include the Logo - and maybe the search bar and basket -->
        <a class="topLogoUnder" href="../pages/index.php">
        <div class="col-md-4 col-md-offset-4">
        - T A B E M A S H O U -
        </div>
        <a></a>
        </div>
    </div>


<div class="container-fluid">
    <div class="blankRow2">
        <div colspan="12"> <!-- Blank row -->
        </div>
    </div>
</div>

<div class="container-fluid smallerScreen">
    <div class="row">
        <div class="col-md-4 col-md-offset-2">
            <a href="../pages/moMenu.php"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></a>
            |
            <a href="../pages/basket.php"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="blankRow2">
        <div colspan="12"> <!-- Blank row -->
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="paleLine">
        <div colspan="12"> <!-- Blank row with colour to seperate the nav bar from the rest of the site body -->
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="blankRow2">
        <div colspan="12"> <!-- Blank row -->
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="blankRow2">
        <div colspan="12"> <!-- Blank row -->
        </div>
    </div>
</div>


<div class="container-fluid" style="text-align:center;z-index: 99;" id="navbar">
  <div class="row" style="background-color:white;">
  <div class="col-md-2" style="text-align:center;">
      <div class="dropDown">
        <div class="dropBtn">
            <a href="../pages/search.php"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
        </div>    
      </div>
    </div>
    <div class="col-md-2" style="text-align:center;">
        <div class="dropDown">
            <a href="../pages/index.php"><li class="dropBtn">H O M E</li></a> <!-- Add <li></li> tags to these for the css -->
        </div>
    </div>
    <div class="col-md-2">
        <div class="dropDown">
            <a href="../pages/recipes.php"><li class="dropBtn">R E C I P E S</li></a>
        </div>
    </div>
    <div class="col-md-2">
        <div class="dropDown">
            <a href="../pages/about.php"><li class="dropBtn">A B O U T</li></a>
        </div>
    </div>
    <div class="col-md-2">
        <div class="dropDown">
            <a href="../pages/contact.php"><li class="dropBtn">C O N T A C T</li></a>
        </div>
    </div>
    <div class="col-md-2"> <!-- Mobile Menu Login/Signup access -->

<div class="container-fluid">
    <div class="row">
            <div class="col-md-2 col-md-offset-10">
            <a onclick="document.getElementById('id01').style.display='block'"><li class="dropBtn">L O G I N / S I G N U P</li></a>
            </div>
        </div>
    </div>


            <!-- LOG IN MODAL -->

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php" method="post">
    <div class="container-fluid">
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
      <h1>LOG IN</h1>
      <hr>
      <label for="email"><b>User Name</b></label>
      <input type="text" placeholder="Enter User Name" name="uName" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>
    
      <div>
      <a onclick="document.getElementById('id02').style.display='block'">Don't have an account?<b>Click Here</b></a>
      </div>

      <div class="clearfix">
        <a type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</a>
        <a type="submit" class="signupbtn">Log In</a>
      </div>
    </div>
  </form>
</div>

<!-- SIGN UP MODAL -->

<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php" method="post">
    <div class="container-fluid">
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
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="userName"><b>User Name</b></label>
      <input type="text" placeholder="Enter User Name" name="userName" required>

      <label for="userFName"><b>First Name</b></label>
      <input type="text" placeholder="Enter First Name" name="userFName" required>

      <label for="userLName"><b>Last Name</b></label>
      <input type="text" placeholder="Enter Last Name" name="useLlName" required>

      <label for="userEmail"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="userEmail" required>

      <label for="userPassword"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="userPassword" required>

      <label for="userPasswordConf"><b>Confirm Password</b></label>
      <input type="password" placeholder="Confirm Password" name="userPasswordConf" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <a type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</a>
        <a type="submit" class="signupbtn">Sign Up</a>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal from the DOM
var modal = document.getElementById('id01');
var modal2 = document.getElementById('id02');
// When the user clicks anywhere outside of the modal it closes
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        modal2.style.display = "none";
    }
    else if (event.target == modal2) {
        modal.style.display = "none";
        modal2.style.display = "none";
    }
}
</script>
<?php
//require('../includes/debugger.inc.php');
?>

    </div>
    </div>
</div>


<div class="container-fluid">
    <div class="blankRow2">
        <div colspan="12"> <!-- Blank row -->
        </div>
    </div>
</div>


<!-- end of 'top container' -->



<script src="../js/stickyNavBar.js"></script>
</body>
</html>