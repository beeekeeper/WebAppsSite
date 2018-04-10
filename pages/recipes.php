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

.paleLine {
    height : 2px !important;
    background-color : #f9f9f9;
}

.blankRowB {
    height: 30px !important;
    /* overwrites any other rules */
    background-color : #FFFFFF;
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
  position : fixed;
  top : 0;
  width : 100%
}

.sticky + .content {
  padding-top: 60px;
}

.flexContainer {
    display : flex;
    color : #fff;
    background-color : #5995DA;  /* Blue */
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
<div class="container-fluid">
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

<div class="container-fluid">
    <div style="background-color:#f9f9f9; height:22px;"> <!-- background of the row, sets it all to a pale grey instead of just behind the 'buttons' -->
        <div class="col-md-1 col-md-offset-1">
            <p class="dropBtn2" href="#">V I E W - A L L</p>
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

<div class="flexContainer">
    <div class='menu'>
        <div class='date'>Aug 14, 2016</div>
        <div class="links">
            <div class='signup'>Sign Up</div>
            <div class='login'>Login</div>
        </div>
    </div>
</div>


<div class='header-container'>
  <div class='header'>
    <div class='subscribe'>Subscribe &#9662;</div>
    <div class='logo'><img src='../images/awesome-logo.svg'/></div>
    <div class='social'><img src='../images/social-icons.svg'/></div>
  </div>
</div>


<div class='photo-grid-container'>
  <div class='photo-grid'>
    <div class='photo-grid-item first-item'>
      <img src='../images/one.svg'/>
    </div>
    <div class='photo-grid-item'>
      <img src='../images/two.svg'/>
    </div>
    <div class='photo-grid-item'>
      <img src='../images/three.svg'/>
    </div>
    <div class='photo-grid-item'>
        <img src='../images/four.svg'/>
    </div>
    <div class='photo-grid-item last-item'>
        <img src='../images/five.svg'/>
    </div>
  </div>
</div>


<div class='footer'>
  <div class='footer-item footer-one'></div>
  <div class='footer-item footer-two'></div>
  <div class='footer-item footer-three'></div>
</div>










</body>

</html>