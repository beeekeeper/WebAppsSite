<?php 
//require('../includes/sessions.inc.php');
require('../includes/authorize.inc.php');

ini_set('display_errors', 1);
// connection and query logic

require('../includes/conn.inc.php');


$queryRecs = "SELECT * FROM recipes";
$stmt = $pdo->query($queryRecs); 
//$row =$stmt->fetchObject();  //fetch object from the above query


//$value = $_POST['recID'];
//$expires = time() + (60*60*24);// one day from now. 
//setcookie($name, $value, $expires); 
//header('Location: recipes.php');


?>





<!DOCTYPE HTML>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- bootstrap - mobile friendly part -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link type="text/css" rel="stylesheet" href="../css/desktop.css">
    <title>TABEMASHOU</title> <!-- Shows up in the tab at the top -->

<!-- Have the name of the page currently on in the header -->

<style>
@import url('https://fonts.googleapis.com/css?family=Oswald'); /* imports the google font oswald which is used throughout the website */
img {
    height: 433px;
    width: 333px;
    object-fit: cover;
    margin: 30px;
}

@media (max-width: 375px) {
    /* for mobiles, 768 and up for small devices like tablets */
    /* CSS goes here */
    img {
        margin-right: 15px;
        margin-left: 6.5px;
        margin-bottom: 15px;
        margin-top: 15px;
        height:233px;
        width: 133px;
    }
}

@media (max-width: 425px) {
    /* for mobiles, 768 and up for small devices like tablets */
    /* CSS goes here */
    img {
        margin-right: 15px;
        margin-left: 6.5px;
        margin-bottom: 15px;
        margin-top: 15px;
        height:233px;
        width: 133px;
    }
}

/*@media (max-width: 646px) {
    /* for mobiles, 768 and up for small devices like tablets */
    /* CSS goes here */
    /*img {
        margin-right: 15px;
        margin-left: 6.5px;
        margin-bottom: 15px;
        margin-top: 15px;
        height:233px;
        width: 133px;
    }
}*/

@media (min-width: 426px) {
    /* for mobiles, 768 and up for small devices like tablets */
    /* CSS goes here */
    img {
        margin-right: 15px;
        margin-left: 6.5px;
        margin-bottom: 15px;
        margin-top: 15px;
        height:333px;
        width: 233px;
    }
}

@media (min-width: 1314px) {
    /* for mobiles, 768 and up for small devices like tablets */
    /* CSS goes here */
    img {
        margin-right: 15px;
        margin-left: 6.5px;
        margin-bottom: 15px;
        margin-top: 15px;
        height:433px;
        width: 333px;
    }
}


/*@media (max-width: 1280px) {
    img {
        height: 333px;
        width: 233px;
        object-fit: cover;
        margin: 15px;
    }
}*/

/*@media (max-width: 991px) {
    /* for mobiles, 768 and up for small devices like tablets */
    /* CSS goes here */
    /*a li {
        display: none;
    }
    .col-md-1 {
        background-color: none;
    }
    .col-md-2 {
        text-align: center;
        display: none;
    }
    img {
        margin-right: 15px;
        margin-left: 6.5px;
        margin-bottom: 15px;
        margin-top: 15px;
        height:333px;
        width: 233px;
    }
}*/
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

    <div class="container-fluid">
        <div class="siteContainerTop">
        <!-- This will include the Logo - and maybe the search bar and basket -->
        <a class="topLogo" href="http://homepages.shu.ac.uk/~b6042054/Abi/RecipesSite/webAppsSite/pages/index.php">
        <div class="col-md-4 col-md-offset-4">
        食べましょう
        </div>
        <a></a>
        </div>
    </div>
    <div class="container-fluid">
        <div class="siteContainerTop">
        <!-- This will include the Logo - and maybe the search bar and basket -->
        <a class="topLogoUnder" href="http://homepages.shu.ac.uk/~b6042054/Abi/RecipesSite/webAppsSite/pages/index.php">
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
    <div> <!-- background of the row, sets it all to a pale grey instead of just behind the 'buttons' -->
        <div class="col-md-1 col-md-offset-1">
            <a  href="../pages/recipes.php"><p class="dropBtn2">V I E W - A L L</p></a>
        </div>
        <div class="col-md-1">
        <a  href="../subPages/breakfast.php"><p class="dropBtn2">B R E A K F A S T</p></a>
        </div>
        <div class="col-md-1">
        <a  href="../subPages/main.php"><p class="dropBtn2" href="#">M A I N</p></a>
        </div>
        <div class="col-md-1">
        <a  href="../subPages/side.php"><p class="dropBtn2" href="#">S I D E</p></a>
        </div>
        <div class="col-md-1">
        <a  href="../subPages/salad.php"><p class="dropBtn2" href="#">S A L A D</p></a>
        </div>
        <div class="col-md-1">
        <a  href="../subPages/snack.php"><p class="dropBtn2" href="#">S N A C K</p></a>
        </div>
        <div class="col-md-1">
        <a  href="../subPages/dessert.php"><p class="dropBtn2" href="#">D E S S E R T</p></a>
        </div>
        <div class="col-md-1">
        <a  href="../subPages/drink.php"><p class="dropBtn2" href="#">D R I N K</p></a>
        </div>
        <div class="col-md-1">
            <a  href="../pages/vegetarian.php"><p class="dropBtn2">V E G E T A R I A N</p></a>
        </div>
        <div class="col-md-1">
        <a  href="../pages/vegan.php"><p class="dropBtn2" href="#">V E G A N</p></a>
        </div>
    </div>




<!-- End of top container plus mini nav bar -->
<div class="container-fluid">
    <div class="blankRowB">
        <div colspan="12"> <!-- Blank row -->
        </div>
    </div>
</div>


<!-- Start of 'V I E W - A L L' page -->

<div class="container-fluid">
    <div class="row">
        <div colspan="12" style="text-align:center;">
            <h1 style="background-color:lavender;">R E C I P E - I N D E X</h1> <!-- #e5e5e5 -->
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="blankRowB">
        <div colspan="12"> <!-- Blank row -->
        </div>
    </div>
</div>

<!-- Breakfast -->
<div class="container-fluid">
    <div class="row">
        <div colspan="12" style="text-align:center;">
            <h2 style="background-color:#d8fcff;">- B R E A K F A S T -</h2>
        </div>
    </div>
</div>

<!-- Flex box for images -->

<div class="container-fluid">
    <div class="row">
        <div class="cell col-md-10 col-md-offset-1">
            <?php 
            $queryRecipes = "SELECT * FROM recipes WHERE recType = 'breakfast'";
            $stmt = $pdo->query($queryRecipes); 
            while ($row =$stmt->fetchObject()) { 
                echo 
                "<a href=\"../pages/details.php?recID=$row->recID\">";

                echo 
                "<img src=\"../images/$row->recImage\"/>";

                echo 
                "</a>";
                //echo "<h5>{$row->recName}</h5>";
            } ?>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="blankRowB">
        <div colspan="12"> <!-- Blank row -->
        </div>
    </div>
</div>


<!-- Main -->
<div class="container-fluid">
    <div class="row">
        <div colspan="12" style="text-align:center;">
            <h2 style="background-color:#fff0d8;">- M A I N -</h2>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="cell col-md-10 col-md-offset-1">
            <?php 
            $queryRecipes = "SELECT * FROM recipes WHERE recType = 'main'";
            $stmt = $pdo->query($queryRecipes); 
            while ($row =$stmt->fetchObject()) { 
                echo 
                "<a href=\"../pages/details.php?recID=$row->recID\">";

                echo 
                "<img src=\"../images/$row->recImage\"/>";

                echo 
                "</a>";
                //echo "<h5>{$row->recName}</h5>";
            } ?>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="blankRowB">
        <div colspan="12"> <!-- Blank row -->
        </div>
    </div>
</div>


<!-- Side -->
<div class="container-fluid">
    <div class="row">
        <div colspan="12" style="text-align:center;">
            <h2 style="background-color:#d8e1ff;">- S I D E -</h2>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="cell col-md-10 col-md-offset-1">
            <?php 
            $queryRecipes = "SELECT * FROM recipes WHERE recType = 'side'";
            $stmt = $pdo->query($queryRecipes); 
            while ($row =$stmt->fetchObject()) { 
                echo 
                "<a href=\"../pages/details.php?recID=$row->recID\">";

                echo 
                "<img src=\"../images/$row->recImage\"/>";

                echo 
                "</a>";
                //echo "<h5>{$row->recName}</h5>";
            } ?>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="blankRowB">
        <div colspan="12"> <!-- Blank row -->
        </div>
    </div>
</div>


<!-- Salad -->
<div class="container-fluid">
    <div class="row">
        <div colspan="12" style="text-align:center;">
            <h2 style="background-color:#d8ffdc;">- S A L A D -</h2>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="cell col-md-10 col-md-offset-1">
            <?php 
            $queryRecipes = "SELECT * FROM recipes WHERE recType = 'salad'";
            $stmt = $pdo->query($queryRecipes); 
            while ($row =$stmt->fetchObject()) { 
                echo 
                "<a href=\"../pages/details.php?recID=$row->recID\">";

                echo 
                "<img src=\"../images/$row->recImage\"/>";

                echo 
                "</a>";
                //echo "<h5>{$row->recName}</h5>";
            } ?>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="blankRowB">
        <div colspan="12"> <!-- Blank row -->
        </div>
    </div>
</div>


<!-- Snack -->
<div class="container-fluid">
    <div class="row">
        <div colspan="12" style="text-align:center;">
            <h2 style="background-color:#e6d8ff;">- S N A C K -</h2>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="cell col-md-10 col-md-offset-1">
            <?php 
            $queryRecipes = "SELECT * FROM recipes WHERE recType = 'snack'";
            $stmt = $pdo->query($queryRecipes); 
            while ($row =$stmt->fetchObject()) { 
                echo 
                "<a href=\"../pages/details.php?recID=$row->recID\">";

                echo 
                "<img src=\"../images/$row->recImage\"/>";

                echo 
                "</a>";
                //echo "<h5>{$row->recName}</h5>";
            } ?>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="blankRowB">
        <div colspan="12"> <!-- Blank row -->
        </div>
    </div>
</div>


<!-- Dessert -->
<div class="container-fluid">
    <div class="row">
        <div colspan="12" style="text-align:center;">
            <h2 style="background-color:#ffd8d8;">- D E S S E R T -</h2>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="cell col-md-10 col-md-offset-1">
            <?php 
            $queryRecipes = "SELECT * FROM recipes WHERE recType = 'dessert'";
            $stmt = $pdo->query($queryRecipes); 
            while ($row =$stmt->fetchObject()) { 
                echo 
                "<a href=\"../pages/details.php?recID=$row->recID\">";

                echo 
                "<img src=\"../images/$row->recImage\"/>";

                echo 
                "</a>";
                //echo "<h5>{$row->recName}</h5>";
            } ?>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="blankRowB">
        <div colspan="12"> <!-- Blank row -->
        </div>
    </div>
</div>


<!-- Drink -->
<div class="container-fluid">
    <div class="row">
        <div colspan="12" style="text-align:center;">
            <h2 style="background-color:#fcffd8;">- D R I N K -</h2>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="cell col-md-10 col-md-offset-1">
            <?php 
            $queryRecipes = "SELECT * FROM recipes WHERE recType = 'drink'";
            $stmt = $pdo->query($queryRecipes); 
            while ($row =$stmt->fetchObject()) { 
                echo 
                "<a href=\"../pages/details.php?recID=$row->recID\">";

                echo 
                "<img src=\"../images/$row->recImage\"/>";

                echo 
                "</a>";
                //echo "<h5>{$row->recName}</h5>";
            } ?>
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
    <div class="row">
        <div colspan="12">
            <h1><a href="../pages/insert.php">WRITE A NEW RECIPE</a></h1>
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