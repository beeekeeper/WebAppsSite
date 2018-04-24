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
  height : 420px;
  object-fit : cover;
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
    height : 400px;
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
}

</style>


</head>

<body>
    <div class="container-fluid">
        <div class="blankRow">
            <div colspan="12"> <!-- Blank row -->
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
<div class="container-fluid" style="text-align:center;">
  <div class="row">
    <div class="col-md-2 col-md-offset-2">
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

<!-- end of 'top container' -->

<div class="container-fluid"  style="text-align:center;">
    <div style="background-color:#f9f9f9; height:22px;"> <!-- background of the row, sets it all to a pale grey instead of just behind the 'buttons' -->
        <div class="col-md-1 col-md-offset-1">
            <p class="dropBtn2" href="../pages/recipes.php">V I E W - A L L</p>
        </div>
        <div class="col-md-1" style="background-color:#f9f9f9; height:22px;">
            <p class="dropBtn2" href="#">B R E A K F A S T</p>
        </div>
        <div class="col-md-1" style="background-color:#f9f9f9; height:22px;">
            <p class="dropBtn2" href="#">M A I N</p>
        </div>
        <div class="col-md-1" style="background-color:#f9f9f9; height:22px;">
            <p class="dropBtn2" href="#">S I D E</p>
        </div>
        <div class="col-md-1" style="background-color:#f9f9f9; height:22px;">
            <p class="dropBtn2" href="#">S A L A D</p>
        </div>
        <div class="col-md-1" style="background-color:#f9f9f9; height:22px;">
            <p class="dropBtn2" href="#">S N A C K</p>
        </div>
        <div class="col-md-1" style="background-color:#f9f9f9; height:22px;">
            <p class="dropBtn2" href="#">D E S S E R T</p>
        </div>
        <div class="col-md-1" style="background-color:#f9f9f9; height:22px;">
            <p class="dropBtn2" href="#">D R I N K</p>
        </div>
        <div class="col-md-1" style="background-color:#f9f9f9; height:22px;">
            <p class="dropBtn2" href="#">B Y - C O U N T R Y</p>
        </div>
        <div class="col-md-1" style="background-color:#f9f9f9; height:22px;">
            <p class="dropBtn2" href="#">S P E C I A L-D I E T</p>
        </div>
    </div>
</div>

<!-- End of top container plus mini nav bar -->

<!-- Start of 'V I E W - A L L' page -->

<div class="container-fluid">
    <div class="row">
        <div colspan="12" style="text-align:center;">
            <h1 style="background-color:lavender;">R E C I P E - I N D E X</h1> <!-- #e5e5e5 -->
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="blankRow2">
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

<!-- Main -->
<div class="container-fluid">
    <div class="row">
        <div colspan="12" style="text-align:center;">
            <h2 style="background-color:#fff0d8;">- M A I N -</h2>
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


<!-- Salad -->
<div class="container-fluid">
    <div class="row">
        <div colspan="12" style="text-align:center;">
            <h2 style="background-color:#d8ffdc;">- S A L A D -</h2>
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


<!-- Dessert -->
<div class="container-fluid">
    <div class="row">
        <div colspan="12" style="text-align:center;">
            <h2 style="background-color:#ffd8d8;">- D E S S E R T -</h2>
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





</body>

</html>