<!DOCTYPE HTML>
<html>

<head>

    <!--<link type="text/css" rel="stylesheet" href="desktop.css">-->
    <title>Bee Keeper</title> <!-- Shows up in the tab at the top -->
    <style>
        ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

li {
    display: inline-block;
}

li a {
    display: block;
    padding: 8px;
    background-color: #FFFFFF;
    text-decoration : none;
    color : black;
    font-family : 'Arial Narrow';
}

.dropDown {
    position: relative;
    display: inline-block;
}

.dropBtn {
    background-color: #FFFFFF;
    font-family: 'Arial Narrow';
    color: black;
    padding: 10px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    width: 150px;
}

.dropContent {
    font-family: 'Arial Narrow';
    display: none;
    background-color: #FFFFFF;
    z-index: 1;
    text-align: center;
    text-decoration : none;
}

.dropContent -a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropContent a:hover {
    background-color: #e0ffe5;
    
}

.dropDown:hover .dropBtn {
    background-color: #e0ffe5;
}

/*@media screen and (min-width: 480px) {*/
            .topLogo {
                /*background-color: skyblue;*/
                width: 90vw;
                height: 90vh;
                border: none;
                text-decoration : none;
                font-family : 'Arial Narrow';
            }

            .logoName{
                text-decoration : none; /* doesnt seem to actually change the logo/ text */
            }
/*}*/

    </style>
<!-- Have the name of the page currently on in the header -->
</head>

<body>
    <div class="siteContainerTop">
        <!-- This will include the Logo - and maybe the search bar and basket -->
        <a class="topLogo" href=".../pages/home.php">
            <span class="logoName">L O G O</span>
        </a>

    </div>

    <div id="navBar">
        <ul>
            <li><a href="#">HOME</a></li>
                <div class="dropDown">
                    <button class="dropBtn">RECIPES</button>
                    <div class="dropContent">
                        <a href="#">VIEW ALL</a>
                        <a href="#">BREAKFAST</a>
                        <a href="#">MAIN</a>
                        <a href="#">SNACK</a>
                        <a href="#">SWEET</a>
                        <a href="#">DRINKS</a>
                        <a href="#">COUNTRY</a>
                        <a href="#">SPECIAL DIETS</a>
                    </div>
                </div>
            <li><a href="#">ABOUT</a></li>
            <li><a href="#">CONTACT</a></li>
        </ul>
    </div>

</body>

</html>