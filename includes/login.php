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

