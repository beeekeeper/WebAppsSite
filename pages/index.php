<!DOCTYPE HTML>
<html lang="en">
<?php
/*setcookie("count", $count, time()+600);*/
setcookie('myCookie', 'myValue', 0, '/dir', 'domain.com', 1, 1);
?>
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

body {
  position: relative;
}

h1 {
    display: inline-block;
    text-decoration: none;
    text-align: center;
    font-family: 'Oswald', 'PT Sans', 'Helvetica Neue', 'Helvetica', 'Arial', 'sans-serif';
    font-size: 18px;
    font-weight : 800;
    /*margin: 1em 0 0;*/
    /*letter-spacing: 4px;*/
    color: #222;
    text-transform: uppercase;
}

h2 {
    display: inline-block;
    text-decoration: none;
    text-align: center;
    font-family: 'Oswald', 'PT Sans', 'Helvetica Neue', 'Helvetica', 'Arial', 'sans-serif';
    font-size: 18px;
    font-weight : 500;
    /*margin: 1em 0 0;*/
    /*letter-spacing: 4px;*/
    color: #222;
    text-transform: uppercase;
}

h3 {
    display : inline-block;
    text-decoration : none;
    text-align : center;
    font-family :  'Oswald', 'PT Sans', 'Helvetica Neue', 'Helvetica', 'Arial', 'sans-serif';
    font-size : 35px;
    font-weight : 800;
    color : #222;
    text-transform : uppercase;
}

h4 {
    color: #222;
    font-family: 'Oswald', 'PT Sans', 'Helvetica Neue', 'Helvetica', 'Arial', 'sans-serif';
    font-size: 14px;
    border: none;
    text-align: center;
    text-transform : uppercase;
}

ul {
    list-style-type: none;
    /*display: flex;
    justify-content: space-between;
    list-style: none;*/
}

li {
    display: inline-block;
    text-decoration: none;
    text-align: center;
    cursor: pointer;
    font-family: 'Oswald', 'PT Sans', 'Helvetica Neue', 'Helvetica', 'Arial', 'sans-serif';
    font-size: 14px;
    font-weight : 500;
    /*margin: 1em 0 0;*/
    /*letter-spacing: 4px;*/
    color: #222;
    text-transform: uppercase;
}

li a {
    display: block;
    padding: 8px;
    background-color: #FFFFFF;
    text-decoration: none;
    color: black;
    font-family: 'Oswald', 'PT Sans', 'Helvetica Neue', 'Helvetica', 'Arial', 'sans-serif';
    cursor: pointer;
}

li a:hover {
    background-color: lavender;
}

.dropBtn {
    background-color: #FFFFFF;
    color: black;
    font-family: 'Oswald', 'PT Sans', 'Helvetica Neue', 'Helvetica', 'Arial', 'sans-serif';
    padding: 10px;
    font-size: 14px;
    border: none;
    cursor: pointer;
    min-width: 160px;
    text-align: center;
}

.dropBtn2 {
    background-color : #F9F9F9;
    color : black;
    font-family : 'Oswald', 'PT Sans', 'Helvetica Neue', 'Helvetica', 'Arial', 'sans-serif';
    font-size : 9px;
    padding : 5px;
    border : none;
    cursor : pointer;
    text-align : center;
}

.dropDown {
    position: relative;
    display: inline-block;
}

.dropContent {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    z-index: 1;
    text-align: center;
}

.dropContent a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    font-size: 14px;
    font-family : 'Oswald', 'PT Sans', 'Helvetica Neue', 'Helvetica', 'Arial', 'sans-serif';
}

.dropContent a:hover {
    background-color: lavender;
    color : white;
}

.dropDown:hover .dropContent {
    display: block;
}

/*dropBtn a:hover {
    color: purple;
}*/

.dropDown:hover .dropBtn {
    color: lavender;
}

.topLogo {
    font-family: 'Oswald', 'PT Sans', 'Helvetica Neue', 'Helvetica', 'Arial', 'sans-serif';
    text-decoration: none;
    text-align: center;
    color: black;
    font-size: 40px;
    font-weight: 600;
}

.topLogoUnder {
    font-family: 'Oswald', 'PT Sans', 'Helvetica Neue', 'Helvetica', 'Arial', 'sans-serif';
    text-decoration: none;
    text-align: center;
    color: black;
    font-size: 10px;
    font-weight: 600;
}

a {
    color: black;
    -o-transition: .5s;
    -ms-transition: .5s;
    -moz-transition: .5s;
    -webkit-transition: .5s;
    transition: .5s;
}

a:hover {
    color: lavender;
    -o-transition: .5s;
    -ms-transition: .5s;
    -moz-transition: .5s;
    -webkit-transition: .5s;
    transition: .5s;
}

li:hover{
    color: lavender;
    -o-transition: .5s;
    -ms-transition: .5s;
    -moz-transition: .5s;
    -webkit-transition: .5s;
    transition: .5s;
}

p:hover{
    color: lavender;
    -o-transition: .5s;
    -ms-transition: .5s;
    -moz-transition: .5s;
    -webkit-transition: .5s;
    transition: .5s;
}

@media (min-width: 992px) {
    .col-md-3 {
        width: fit-content;
    }
}

.blankRow {
    height: 20px !important;
    /* overwrites any other rules */
    background-color: #FFFFFF;
}

.blankRow2 {
    height : 10px !important;
    background-color : #FFFFFF;
}

.blankRow3 {
    height : 20px !important;
    font-family: 'Oswald', 'PT Sans', 'Helvetica Neue', 'Helvetica', 'Arial', 'sans-serif';
    text-decoration: none;
    text-align: center;
    color: black;
    font-size: 10px;
    font-weight: 600;
}

.blankRowB {
    height: 30px !important;
    /* overwrites any other rules */
    background-color : #FFFFFF;
}

.paleLine {
    height : 2px !important;
    background-color : #f9f9f9;
}

.carousel-inner > .item > img {
  width : 640px;
  height : 520px;
  object-fit : cover;
}

.carousel-indicators li {
    border-radius: 12px;
    width: 12px !important;
    height: 12px !important;
}

#carousel-example-generic {
    width: 100%;
    max-width: 1880px;
    margin: 0 auto;
    height : 520px;
}

.carousel-indicators .active {
    width: 12px;
    height: 12px;
    margin: 1px;
    background-color: #fff;
}

.carousel-indicators li {
    display: inline-block;
    width: 10px;
    height: 10px;
    margin: 1px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #000\9;
    background-color: rgba(0,0,0,0);
    border: 1px solid #fff;
    border-radius: 10px;
}

.profile .main-section .content {width: 60%}

.sticky {
  position: fixed;
  top: 0;
  width: 100%
}

.sticky + .content {
  padding-top: 60px;
}

.flexContainer {
display : flex;
color : #fff;
background-color : #5995DA; /* Blue */
padding : 20px 0;
justify-content : center;
}

.menu {
border: 1px solid #fff; /* for debugging*/
width: 900px;
display: flex;
justify-content: space-between;
}

.links {
display: flex;
justify-content: flex-end;
}

.login {
margin-left: 20px;
}

.header-container {
color: #5995DA;
background-color: #D6E9FE;
display: flex;
justify-content: center;
}

.header {
width: 900px;
height: 300px;
display: flex;
justify-content: space-between;
align-items: center;
}

.photo-grid-container {
display: flex;
justify-content: center;
}

.photo-grid {
width: 900px;
display: flex;
justify-content: space-around;
flex-wrap: wrap;
}

.photo-grid-item {
border: 1px solid #fff;
width: 300px;
height: 300px;
justify-content : space-around;
display : flex;
}

.footer {
display: flex;
justify-content: space-between;
}

.footer-item {
border: 1px solid #fff;
background-color: #D6E9FE;
height: 200px;
flex: 1;
}

@media (min-width: 1200px) {
}

ol li {
    max-width: 20px;
}

.carousel-control.left {
    background-image: none;
    background-image: none;
    background-image: none;
    background-image: none;
    filter: none;
    background-repeat: none;
}

.carousel-control.right {
    background-image: none;
    background-image: none;
    background-image: none;
    background-image: none;
    filter: none;
    background-repeat: none;
}

carousel-caption { right: 30%; left: 30% } 
@media (min-width: 768px){ 
    .carousel-caption { right: 15%; left: 15% } 
}

@media (max-width: 767px) { /* for mobiles, 768 and up for small devices like tablets */
    /* CSS goes here */
    
    li {
        text-align : center;
    }

    .col-md-2 {
        text-align : center;
    }

    .carousel-inner > .item > img {
        width : 640px;
        height : 250px;
        object-fit : cover;
    }

    #carousel-example-generic {
    width: 100%;
    max-width: 1880px;
    margin: 0 auto;
    height : 250px; /* height of the slide indicators */
}
}

</style>


</head>

<body>
    <div class="container-fluid">
    <div class="row">
        <div class="blankRow3">
            <!--<div colspan="12">--> <!-- Blank row -->
            <div class="col-md-2 col-md-offset-10">
            <a href="#">L O G I N / S I G N U P</a>
            </div>
        </div>
    </div>
    </div>
    
    <div class="container-fluid">
        <div class="siteContainerTop">
        <!-- This will include the Logo - and maybe the search bar and basket -->
        <a class="topLogo" href="http://homepages.shu.ac.uk/~b6042054/Abi/RecipesSite/webAppsSite/pages/home.php">
        <div class="col-md-4 col-md-offset-4">
        食べましょう
        </div>
        <a></a>
        </div>
    </div>
    <div class="container-fluid">
        <div class="siteContainerTop">
        <!-- This will include the Logo - and maybe the search bar and basket -->
        <a class="topLogoUnder" href="http://homepages.shu.ac.uk/~b6042054/Abi/RecipesSite/webAppsSite/pages/home.php">
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
<div class="container-fluid">
  <div class="row">
    <div class="col-md-2 col-md-offset-2" style="text-align:center;">
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
    <div class="row">
        <div class="blankRow3">
            <!--<div colspan="12">--> <!-- Blank row -->
            <div class="col-md-2 col-md-offset-10">
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="text-align:center;">
<div class="row" colspan="12">
<h3>Welcome To Tabemashou</h3>
</div>
</div>
<div class="container-fluid" style="text-align:center;">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<h4>Here you have access to recipes seperated by meal type, country and dietary requirements. You can pick and choose up to 7 recipes per meal type to personalise your own weekly meal plan.</h4>
<h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, 
imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, 
porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.</h4>
<h4>Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. 
Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. 
Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.</h4>
<h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, 
imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, 
porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.</h4>
<h4>Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. 
Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. 
Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.</h4>
</div>



<script src="../js/stickyNavBar.js"></script>
</body>

</html>