<?php
// create cookie

$name = 'myFav';
// echo $_POST['favColour'];  //echos back to the user what colour
$value = $_POST['favColour']; // puts it into a variable
$expires = time()+(60*60); // the cookie will live for an hour (60 is in seconds)
setcookie($name, $value, $expires); // this will set the cookie
header('Location: preferences.php');   // this will take you to the preferences page with the default option (red)  but the cookie is set with a value of blue (selected)



?>