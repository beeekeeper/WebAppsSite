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
ul {
    list-style-type: none;
    /*display: flex;
    justify-content: space-between;
    list-style: none;*/
}

li {
    display: inline-block;
    text-decoration: none;
    /*min-width: 160px;*/
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
    background-color: lavender-blush;
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
  height : 440px;
  object-fit : contain;
}

.carousel-indicators li {
    border-radius: 12px;
    width: 12px !important;
    height: 12px !important;
}

#carousel-example-generic {
    width: 100%;
    max-width: 1400px;
    margin: 0 auto;
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

@media (min-width: 1200px) {
}

ol li {
    max-width: 20px;
}

carousel-caption { right: 30%; left: 30% } 
@media (min-width: 768px){ 
    .carousel-caption { right: 15%; left: 15% } 
}

@media (max-width: 767px) { /* for mobiles, 768 and up for small devices like tablets */
    /* CSS goes here */
    li {

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
    <div class="col-md-2 col-md-offset-2">
        <div class="dropDown">
            <a href="../pages/index.php"><li class="dropBtn">H O M E</li></a> <!-- Add <li></li> tags to these for the css -->
        </div>
    </div>
    <div class="col-md-2">
    <div class="dropDown">
        <a  href="../pages/recipes.php"><li class="dropBtn">R E C I P E S</li></a>
        <div class="dropContent">
            <a href="../subPages/viewAll.php">V I E W - A L L</a>
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
        <img class="img-responsive" src="../images/drinkforsliderthing.jpg" alt="drink" style="width:100%;">
      </div>

      <div class="item">
        <img class="img-responsive" src="../images/Israeli-Couscous-Salad-7.jpg" alt="salad" style="width:100%;">
      </div>
    
      <div class="item">
        <img class="img-responsive" src="../images/Pumpkin-Soup-landscape.jpg" alt="soup" style="width:100%;">
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


</body>

</html>