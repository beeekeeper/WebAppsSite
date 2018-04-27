<?php
require('../includes/sessions.inc.php'); 
require('../includes/conn.inc.php');

$regLogin = filter_var($_POST['userLogin'], FILTER_VALIDATE_EMAIL); //like in the checklogin page it makes sure that it is a valid email by filtering it to make sure it looks like an email and is one 
$regPassword = $_POST['password']; 
$regPasswordConfirm = $_POST['passwordConfirm'];

if (!$regLogin) { 
    $_SESSION['regError'] = 1; //1 for invalid email
    $referer = "../webAppsSite/pages/register.php"; 
    header("Location: ../".$referer); 
    exit; 
}

if ($regPassword != $regPasswordConfirm || $regPassword == "") { 
    $_SESSION['regError'] = 2; //2 for invalid password
    $referer = "../webAppsSite/pages/register.php"; 
    header("Location: ../".$referer);
     exit; 

} else { 

    // Password is valid 
    $sql= "SELECT * FROM users WHERE userEmail = :userEmail"; 
    $stmt = $pdo->prepare($sql); 
    $stmt->bindParam(':userEmail', $regLogin, PDO::PARAM_STR); 
    $stmt->execute(); $numUsers = $stmt->rowCount(); 

    //Check if the user has already registered
    if ($numUsers == 1) { 
        $_SESSION['regError'] = 3; 
        $referer = "../webAppsSite/pages/register.php"; 

    } else { 
        // Insert the New User into the Database 
        $sql= "INSERT INTO users(userEmail, userPassword) VALUES (:userEmail, :userPassword)"; 
        $stmt = $pdo->prepare($sql); 
        $hashedPw = password_hash($regPassword, PASSWORD_BCRYPT); //refPassword is the password entered into the registration form
        $stmt->bindParam(':userEmail', $regLogin, PDO::PARAM_STR); 
        $stmt->bindParam(':userPassword', $hashedPw, PDO::PARAM_STR); 
        $stmt->execute(); 
        
        if (isset($_SESSION['regError'])) {
            unset($_SESSION['regError']); //clear any previous errors - resetting them
        } 
        
        $referer = "../webAppsSite/pages/login.php";

    }
}
header("Location: ../".$referer); // either redirects you to the registration page because the account already exists or enters the data into the database and redirects you to the login page
exit;
?>