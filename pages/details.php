<?php
ini_set('display_errors', 1);
require('../includes/conn.inc.php');
require('../includes/functions.inc.php');

$sRecID = safeInt($_GET['recID']);
$sql= "SELECT * FROM recipes WHERE recID = :recID";
//$sRecID = safeInt($_GET['recID']);
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':recID', $sRecID, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetchObject();


?>




<!DOCTYPE html>
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

img {
    height: 433px;
    width: 333px;
    object-fit: cover;
    margin-right: 30px;
    margin-left:30px;
    margin-top: 30px;
    margin-bottom:0px;
}
h6 {
    margin-left:30px; 
    margin-right:30px; 
    margin-top:10px; 
    width:333px; 
    text-align:center;
    font-family: 'Oswald', 'PT Sans', 'Helvetica Neue', 'Helvetica', 'Arial', 'sans-serif';
    font-size: 10px;
    font-weight: 100;
    color: rgb(201, 201, 201);
    text-transform: uppercase;"
}

/*@media (max-width: 1280px) {
    img {
        height: 333px;
        width: 233px;
        object-fit: cover;
        margin: 15px;
    }

    h6 {
    margin-left:15px; 
    margin-right:15px; 
    margin-top:5px; 
    width:233px; 
    }

}*/

@media (max-width: 414px) {
    /* for mobiles, 768 and up for small devices like tablets */
    /* CSS goes here */
    img {
        margin-right: 0px;
        margin-left: 40px;
        height:433px;
        width: 333px;
    }

    h6 {
        margin-left: 40px;
        margin-right: 0px;
    }

    h4 {
        margin-left: 20px;
        margin-right: 20px;
    }

}

@media (max-width: 375px) {

    img {
        margin-left: 22px;
    }

    h6 {
        margin-left : 22px;
        margin-right: 0px;
    }

    h4 {
        margin-left: 10px;
        margin-right: 10px;
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
        <a  href="../pages/recipes.php"><li class="dropBtn">R E C I P E S</li></a>
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

<!-- START OF DETAILS PAGE -->
<div class="container-fluid">
    <div class="blankRowB">
        <div colspan="12"> <!-- Blank row -->
        </div>
    </div>
</div>
<!-- RECIPE NAME (HEADER) -->

<div class="container-fluid">
    <div class="row">
        <div colspan="12" style="text-align:center;">
            <h3 style="text-align:center;">
                <?php
                echo $row->recName;?></h3>
        </div>
    </div>
</div>    
<!-- SUITABLE FOR/ DIET(S) -->
<div class="container-fluid">
    <div class="row">
        <div colspan="12">
            <h4 style="text-align:center; color:rgb(201, 201, 201); margin-top:0px;"><?php echo $row->recDiet;?></h4>
        </div>
    </div>
</div>  

<div class="container-fluid">
    <div class="blankRowB">
        <div colspan="12"> <!-- Blank row -->
        </div>
    </div>
</div>

<!-- RECIPE IMAGE/DESC/INGREDIENTS AND METHOD -->

<div class="row">
    <div class="col-md-3 col-md-offset-2">
    <div>
		<?php 
		// add image here (and image desc)
          echo "<img src=\"../images/$row->recImage\">";
        ?>
    </div>

    <!-- IMAGE DESCRIPTION/ ORIGINAL IMAGE SOURCE -->
    <div>
        <h6><?php echo $row->recImageDesc;?></h6>
    </div>

    </div>
    
    <!-- TRY A NESTED COL THING -->
    <div class="col-md-5" style="margin-top:30px; margin-bottom:30px;">
        <!-- recName, Description, suitable for?? -->
        <!-- REC DESC -->

        <div>
        <h4 style="color:rgb(201, 201, 201); margin-top:0px;"><?php echo $row->recDescription;?></h4>
        </div>

        <div class="container-fluid">
            <div class="blankRowB">
                <div colspan="12"> <!-- Blank row -->
                </div>
            </div>
        </div>

        <!-- INGREDIENTS -->

        <div style="text-align:center;">
        <h1>- I N G R E D I E N T S -</h1>
        </div>  

        <div>
        <h4><?php echo $row->recIngredients; ?><h4>
        </div>

        <div class="container-fluid">
            <div class="blankRowB">
                <div colspan="12"> <!-- Blank row -->
                </div>
            </div>
        </div>

        <!-- METHOD -->

        <div style="text-align:center;">
        <h1>- M E T H O D -</h1>
        </div>  

        <div>
        <h4><?php echo $row->recMethod; ?><h4>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-md-offset-2">
        <!-- EDIT RECIPE LINK -->
            <div>
            <h1 style="text-align: center;"><a href="../pages/edit.php?recID=<?php echo $row->recID ?>">E D I T</a></h1>
            </div>
            <div>
            <h1 style="text-align: center;"><a href="../pages/delete.php?recID=<?php echo $row->recID ?>">D E L E T E</a></h1>
            </div>
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



<script src="../js/stickyNavBar.js"></script>
</body>
</html>