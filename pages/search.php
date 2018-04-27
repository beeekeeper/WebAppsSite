<?php 
ini_set('display_errors', 1);
require('../process/database.php');
include('../includes/functions2.inc.php');
include('../includes/functions.inc.php');

if(isset($_GET['recName'])){
	$sRecName = safeString($_GET['recName']); // little s before FilmID as this is a safe variable
    // optional array of field names
    $db = new Database('localhost','b6042054','g1nger','b6042054_db2');
	$db->select("recipes");
	$db->whereLike("recName",$sRecName); // can add an 's' to the end of the brackets to say that you're adding a string
	$recipes = $db->fetchData();
}
?>
<!DOCTYPE html>
<html lang="en">
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

<div class="container">
    <div class="row">
    <div class="col-md-12" style="text-align:center;">
    	<h2>Search by name</h2>
        		<form method="get" style="text-align:center;">
        					<div class="form-group">
                           <label for="recName"></label>
                           <input type="text" name="recName" id="recName" class="form-control" >
                           <input type="submit" class="btn btn-default" style="border-style: none;
                                font-family: 'Oswald';text-transform: uppercase;text-align: center;
                                vertical-align: text-bottom;">
                           </div>
               </form>                     
     </div>
     </div>
    <div class="row">
    <div class="col-md-12" style="margin-top:30px;">
                           
        <?php if(isset($recipes)){
			for($a=0;$a<count($recipes);$a++){ ?>

          <ul style="text-align:center;padding-left:0px;">
              <li style="display:inline;">
                  <!--<span><?php //echo $a+1; ?></span>-->
                  <span><h1><a href="../pages/details?recID=<?php echo $row->recID ?>" style="background-color:white;text-decoration:none;padding-bottom:0px;"> <?php echo $recipes[$a]['recName']; ?> </a></h1></span>
                
                  <h4 style="color:lightgrey;margin-top:0px;"><span style="margin:15px;"><?php echo $recipes[$a]['recDiet']; ?></span></h4>
                  <h4><span><?php echo $recipes[$a]['recType']; ?></span></h4>
                  <div class="container-fluid">
                    <div class="blankRow2">
                        <div colspan="12"> <!-- Blank row -->
                        </div>
                    </div>
                  </div>
              </li>
          </ul>    

<?php 
	  			} // end for
 		} // 	
?>
    </div>
    </div>
</div>

<script src="../js/stickyNavBar.js"></script>
</body>
</html>