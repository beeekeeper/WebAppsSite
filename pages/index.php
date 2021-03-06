<?php
//require('../includes/sessions.inc.php');
require('../includes/conn.inc.php');

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
            <a href="../subPages/byCountry.php">V E G E T A R I A N</a>
            <a href="../subPages/specialDiets.php">V E G A N</a>
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
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>
    

    <!-- Wrapper for slides -->
   <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img class="img-responsive" src="../images/jgm-recipes-fried-eggs-1600x10001.jpg" alt="breakfast" style="width:100%;">
      </div>
      
      <div class="item">
        <img class="img-responsive" src="../images/jgm-le-dock-1600x1000-23.jpg" alt="salad" style="width:100%;">
      </div>
    
      <div class="item">
        <img class="img-responsive" src="../images/jgm-topping-rose-house-1600x1000-52.jpg" alt="side" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#carouselExampleIndicators" data-slide="prev" role="button">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carouselExampleIndicators" data-slide="next" role="button">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="container-fluid">
    <div class="blankRowB">
        <div colspan="12"> <!-- Blank row -->
        </div>
    </div>
</div>


<div class="container-fluid" style="text-align:center;">
    <div class="row" colspan="12">
        <h3>- Welcome To Tabemashou -</h3>
    </div>
</div>

<div class="container-fluid" style="text-align:center;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h4>Here you have access to recipes seperated by meal type and dietary requirements. You can pick and choose up to 7 recipes per meal type to personalise your own weekly meal plan.</h4>
            <h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, 
            imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, 
            porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.</h4>
            <h4>Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. 
            Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. 
            Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.</h4>
        </div>
    </div>
</div>


<script src="../js/stickyNavBar.js"></script>
</body>

</html>