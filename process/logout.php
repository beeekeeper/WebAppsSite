<?php
//include('../includes/sessions.inc.php');
//logout code

session_start();


if (isset($_COOKIE[session_name()])) {
// match PHPSESSID settings
    setcookie('PHPSESSID', 'h512megofhntq6c12gm2lekbh5', time()-3600, '/~b6042054/Abi/RecipesSite/', 'homepages.shu.ac.uk', 1, 1);
// clear the Session cookie
}

$_SESSION = array();
// empty the array

session_destroy();
//destroy the session

//header("location:../pages/login.php");
//to redirect

exit();

//phpsessid cookie can be deleted in inspection under application to log out as well - for testing purposes
?>