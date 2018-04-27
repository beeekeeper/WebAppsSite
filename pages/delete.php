<?php
ini_set('display_errors', 1);
require('../includes/conn.inc.php');
require('../includes/functions.inc.php');

$sRecID = safeInt($_GET['recID']);
$sql= "SELECT * FROM recipes WHERE recID LIKE :recID";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':recID', $sRecID, PDO::PARAM_INT); 
$stmt->execute();
$row = $stmt->fetchObject();

?>



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

@media (max-width: 991px) {
    /* for mobiles, 768 and up for small devices like tablets */
    /* CSS goes here */
    a li {
        display: none;
    }
    .col-md-1 {
        background-color: none;
    }
    .col-md-2 {
        text-align: center;
        display: none;
    }
}

</style>


</head>

<body>
    <div class="container-fluid">
    <div class="row">
        <div class="blankRow3">
            <div class="col-md-2 col-md-offset-10">
            <a action="../process/logout.php" href="../pages/index.php">L O G - O U T</a>
            </div>
        </div>
    </div>
    </div>



<!-- START OF TOP CONTAINER -->

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
    <div class="col-md-2" style="text-align:center;">
    <div class="dropDown">
        <a href="../pages/recipes.php"><li class="dropBtn">R E C I P E S</li></a>
        <div class="dropContent">
            <a href="../pages/recipes.php">V I E W - A L L</a>
            <a href="../subPages/breakfast.php">B R E A K F A S T</a>
            <a href="../subPages/main.php">M A I N</a>
            <a href="../subPages/side.php">S I D E</a>
            <a href="../subPages/salad.php">S A L A D</a>
            <a href="../subPages/snack.php">S N A C K</a>
            <a href="../subPages/dessert.php">D E S S E R T</a>
            <a href="../subPages/drink.php">D R I N K</a>
            <a href="../subPages/byCountry.php">B Y - C O U N T R Y</a>
            <a href="../subPages/specialDiets.php">S P E C I A L - D I E T</a>
        </div>
    </div>
    </div>
    <div class="col-md-2" style="text-align:center;">
        <div class="dropDown">
            <a href="../pages/about.php"><li class="dropBtn">A B O U T</li></a>
        </div>
    </div>
    <div class="col-md-2" style="text-align:center;">
        <div class="dropDown">
            <a href="../pages/contact.php"><li class="dropBtn">C O N T A C T</li></a>
        </div>
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

<!-- end of 'top container' -->

<div class="container-fluid">
    <div class="blankRowB">
        <div colspan="12"> <!-- Blank row -->
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="blankRowB">
        <div colspan="12"> <!-- Blank row -->
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div colspan="12">
            <h1>ARE YOU SURE YOU WANT TO DELETE THIS RECIPE?</h1>
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
    <div class="row">
        <div class="col-md-2 col-md-offset-4">
            <h1><a style="color:#f44336;" href="../pages/recipes.php">NO</a></h1>
        </div>
        <div class="col-md-2">
            <!--<h1><a style="color:#36f44f;" action="../process/deleteRec.php?recID=<?php //echo $row->recID ?>">YES</a></h1>-->
            <form name="form1" method="post" action="../process/deleteRec.php" class="form-inline">
                <!-- Add the filmID as a hidden field -->
                <input type = "hidden" name = "filmID" value = "<?php echo $row->filmID; ?>">
            	<input style="color:#36f44f;ont-family: 'Oswald', 'PT Sans', 'Helvetica Neue', 'Helvetica', 'Arial', 'sans-serif';
                    font-size: 18px;font-weight: 800;" type="submit" value="YES" class="h1">
                <a href="../pages/recipes.php"></a>
            </form>
        </div>
    </div>
</div>


<script src="../js/stickyNavBar.js"></script>
</body>
</html>