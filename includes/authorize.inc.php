<?php
require('../includes/sessions.inc.php');
// check if session login and redirect if not 
if (!isset($_SESSION['login'])) {
    // need to be logged in to see the recipes
    header('Location: ../pages/login.php');
    exit;
}
//can drop this in to any page that needs protecting (why it's an include)
?>