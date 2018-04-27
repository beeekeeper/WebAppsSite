<?php
require('../includes/sessions.inc.php');
require('../includes/conn.inc.php');


$userEmail = filter_var($_POST['userEmail'], FILTER_VALIDATE_EMAIL);

if ($userEmail) {
    // email good -- not an email to log in, userName
    // check if in database next
    $sql= "SELECT * FROM users WHERE userEmail = :userEmail";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':userEmail', $userEmail, PDO::PARAM_STR);
    $stmt->execute();
    $numUsers = $stmt->rowCount();

    if ($numUsers == 0) {
        // email not in database error
        $_SESSION['loginError'] = 1;
        $referer = "../webAppsSite/pages/login.php";

    } else {
        // need to check password next

        $row =$stmt->fetchObject();
        $dbPasswordHash = $row->userPassword;
        if (password_verify($_POST['password'], $dbPasswordHash)) {
            unset($_SESSION['loginError']);
            $_SESSION['login'] = 1;
            $referer = "../webAppsSite/pages/recipes.php";
        } else {
            // database does not match error
            $_SESSION['loginError'] = 1;
            $referer = "../webAppsSite/pages/login.php";
        }
    }
    
} else {
    // not valid email error
    $_SESSION['loginError'] = 1;
    $referer = "../webAppsSite/pages/login.php";
}
header("Location: ../".$referer);




?>
<!-- userLogin on database - needs to be a unique field (add unique index) -->